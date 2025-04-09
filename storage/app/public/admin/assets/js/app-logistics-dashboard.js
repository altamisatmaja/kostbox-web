document.addEventListener("DOMContentLoaded", function () {
    // ====== Config & Color Utilities ======
    const textMuted = config.colors.textMuted;
    const headingColor = config.colors.headingColor;
    const borderColor = config.colors.borderColor;
    const bodyColor = config.colors.bodyColor;
    const fontFamily = config.fontFamily;
  
    const chartColors = {
      donut: {
        series1: config.colors.success,
        series2: `color-mix(in sRGB, ${config.colors.success} 80%, ${config.colors.cardColor})`,
        series3: `color-mix(in sRGB, ${config.colors.success} 60%, ${config.colors.cardColor})`,
        series4: `color-mix(in sRGB, ${config.colors.success} 40%, ${config.colors.cardColor})`,
      },
      line: {
        series1: config.colors.warning,
        series2: config.colors.primary,
        series3: "#7367f029",
      },
    };
  
    // ====== Shipment Statistics Chart ======
    const shipmentChartEl = document.querySelector("#shipmentStatisticsChart");
  
    if (shipmentChartEl) {
      const shipmentChart = new ApexCharts(shipmentChartEl, {
        series: [
          { name: "Shipment", type: "column", data: [38, 45, 33, 38, 32, 50, 48, 40, 42, 37] },
          { name: "Delivery", type: "line", data: [23, 28, 23, 32, 28, 44, 32, 38, 26, 34] }
        ],
        chart: {
          height: 320,
          type: "line",
          stacked: false,
          parentHeightOffset: 0,
          toolbar: { show: false },
          zoom: { enabled: false }
        },
        markers: {
          size: 5,
          colors: [config.colors.white],
          strokeColors: chartColors.line.series2,
          hover: { size: 6 },
          borderRadius: 4
        },
        stroke: { curve: "smooth", width: [0, 3], lineCap: "round" },
        legend: {
          show: true,
          position: "bottom",
          fontSize: "15px",
          fontFamily: fontFamily,
          fontWeight: 400,
          labels: { colors: headingColor },
          offsetY: 8,
          markers: { size: 4, shape: "circle", offsetX: -3 }
        },
        grid: {
          strokeDashArray: 8,
          borderColor: borderColor
        },
        colors: [chartColors.line.series1, chartColors.line.series2],
        fill: { opacity: [1, 1] },
        plotOptions: {
          bar: {
            columnWidth: "30%",
            startingShape: "rounded",
            endingShape: "rounded",
            borderRadius: 4
          }
        },
        dataLabels: { enabled: false },
        xaxis: {
          tickAmount: 10,
          categories: ["1 Jan", "2 Jan", "3 Jan", "4 Jan", "5 Jan", "6 Jan", "7 Jan", "8 Jan", "9 Jan", "10 Jan"],
          labels: {
            style: {
              colors: textMuted,
              fontSize: "13px",
              fontFamily: fontFamily
            }
          },
          axisBorder: { show: false },
          axisTicks: { show: false }
        },
        yaxis: {
          tickAmount: 4,
          min: 0,
          max: 50,
          labels: {
            style: {
              colors: textMuted,
              fontSize: "13px",
              fontFamily: fontFamily
            },
            formatter: (val) => `${val}%`
          }
        },
        responsive: [
          {
            breakpoint: 1400,
            options: {
              chart: { height: 320 },
              xaxis: { labels: { style: { fontSize: "10px" } } },
              legend: { fontSize: "13px", offsetY: 12 }
            }
          },
          {
            breakpoint: 1025,
            options: {
              chart: { height: 415 },
              plotOptions: { bar: { columnWidth: "50%" } }
            }
          },
          {
            breakpoint: 982,
            options: {
              plotOptions: { bar: { columnWidth: "30%" } }
            }
          },
          {
            breakpoint: 480,
            options: {
              chart: { height: 250 },
              legend: { offsetY: 7 }
            }
          }
        ]
      });
      shipmentChart.render();
    }
  
    // ====== Delivery Exceptions Donut Chart ======
    const exceptionsChartEl = document.querySelector("#deliveryExceptionsChart");
  
    if (exceptionsChartEl) {
      const exceptionsChart = new ApexCharts(exceptionsChartEl, {
        chart: {
          height: 391,
          parentHeightOffset: 0,
          type: "donut"
        },
        labels: ["Incorrect address", "Weather conditions", "Federal Holidays", "Damage during transit"],
        series: [13, 25, 22, 40],
        colors: [
          chartColors.donut.series1,
          chartColors.donut.series2,
          chartColors.donut.series3,
          chartColors.donut.series4
        ],
        stroke: { width: 0 },
        dataLabels: {
          enabled: false,
          formatter: (val) => `${parseInt(val)}%`
        },
        legend: {
          show: true,
          position: "bottom",
          offsetY: 15,
          fontSize: "13px",
          fontFamily: fontFamily,
          fontWeight: 400,
          labels: { colors: headingColor }
        },
        tooltip: { theme: "dark" },
        grid: { padding: { top: 15 } },
        plotOptions: {
          pie: {
            donut: {
              size: "77%",
              labels: {
                show: true,
                value: {
                  fontSize: "24px",
                  fontFamily: fontFamily,
                  color: headingColor,
                  fontWeight: 500,
                  offsetY: -20,
                  formatter: (val) => `${parseInt(val)}%`
                },
                name: { offsetY: 30, fontFamily: fontFamily },
                total: {
                  show: true,
                  fontSize: "15px",
                  fontFamily: fontFamily,
                  color: bodyColor,
                  label: "AVG. Exceptions",
                  formatter: () => "30%"
                }
              }
            }
          }
        },
        responsive: [
          {
            breakpoint: 420,
            options: {
              chart: { height: 360 }
            }
          }
        ]
      });
      exceptionsChart.render();
    }
  
    // ====== DataTable for Route Vehicles ======
    const routeTableEl = document.querySelector(".dt-route-vehicles");
  
    if (routeTableEl) {
        new DataTable(routeTableEl, {
            ajax: function (data, callback, settings) {
                const jsonData = {
                  top_routes: [
                    { route: "Jakarta - Bandung", deliveries: 210, on_time: 198 },
                    { route: "Surabaya - Malang", deliveries: 180, on_time: 160 },
                    { route: "Medan - Pekanbaru", deliveries: 160, on_time: 145 },
                  ]
                };
            
                // Datatables expect object with `data` key
                callback({ data: jsonData.top_routes });
              },                 
        columns: [
            { data: 'route', title: 'Rute' },
            { data: 'deliveries', title: 'Total Pengiriman' },
            { data: 'on_time', title: 'Tepat Waktu' }        
        ],
        columnDefs: [
          {
            targets: 0,
            className: "control",
            orderable: false,
            searchable: false,
            responsivePriority: 2,
            render: () => ""
          },
          {
            targets: 1,
            orderable: false,
            searchable: false,
            responsivePriority: 3,
            checkboxes: true,
            checkboxes: {
              selectAllRender: '<input type="checkbox" class="form-check-input">'
            },
            render: () => '<input type="checkbox" class="dt-checkboxes form-check-input">'
          },
          {
            targets: 2,
            responsivePriority: 1,
            render: (data, type, row) => `
              <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                  <div class="avatar me-4">
                    <span class="avatar-initial rounded-circle bg-label-secondary">
                      <i class="icon-base ti tabler-car icon-lg"></i>
                    </span>
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a class="text-heading text-nowrap fw-medium" href="app-logistics-fleet.html">VOL-${row.location}</a>
                </div>
              </div>
            `
          },
          {
            targets: 3,
            render: (data, type, row) => `<div class="text-body">${row.start_city}, ${row.start_country}</div>`
          },
          {
            targets: 4,
            render: (data, type, row) => `<div class="text-body">${row.end_city}, ${row.end_country}</div>`
          },
          {
            targets: -2,
            render: (data, type, row) => {
              const warningLabels = {
                1: { title: "No Warnings", class: "bg-label-success" },
                2: { title: "Temperature Not Optimal", class: "bg-label-warning" },
                3: { title: "Ecu Not Responding", class: "bg-label-danger" },
                4: { title: "Oil Leakage", class: "bg-label-info" },
                5: { title: "Fuel Problems", class: "bg-label-primary" }
              };
              const warning = warningLabels[row.warnings];
              return warning
                ? `<span class="badge rounded ${warning.class}">${warning.title}</span>`
                : data;
            }
          },
          {
            targets: -1,
            render: (data, type, row) => `
              <div class="d-flex align-items-center">
                <div class="progress w-100" style="height: 8px;">
                  <div class="progress-bar" role="progressbar" style="width: ${row.progress}%"
                    aria-valuenow="${row.progress}" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
                <div class="text-body ms-3">${row.progress}%</div>
              </div>
            `
          }
        ],
        select: {
          style: "multi",
          selector: "td:nth-child(2)"
        },
        order: [2, "asc"],
        layout: {
          topStart: { rowClass: "", features: [] },
          bottomStart: { rowClass: "row mx-3 justify-content-between", features: ["info"] },
          bottomEnd: "paging"
        },
        lengthMenu: [5],
        language: {
          paginate: {
            next: '<i class="icon-base ti tabler-chevron-right scaleX-n1-rtl icon-18px"></i>',
            previous: '<i class="icon-base ti tabler-chevron-left scaleX-n1-rtl icon-18px"></i>',
            first: '<i class="icon-base ti tabler-chevrons-left scaleX-n1-rtl icon-18px"></i>',
            last: '<i class="icon-base ti tabler-chevrons-right scaleX-n1-rtl icon-18px"></i>'
          }
        },
        responsive: {
          details: {
            display: DataTable.Responsive.display.modal({
              header: (row) => "Details of " + row.data().location
            }),
            type: "column",
            renderer: (api, rowIdx, columns) => {
              const table = document.createElement("table");
              table.classList.add("table", "datatables-basic", "mb-2");
              const tbody = document.createElement("tbody");
  
              tbody.innerHTML = columns.map(col => col.title
                ? `<tr data-dt-row="${col.rowIndex}" data-dt-column="${col.columnIndex}">
                    <td>${col.title}:</td>
                    <td>${col.data}</td>
                  </tr>`
                : "").join("");
  
              table.appendChild(tbody);
              return table;
            }
          }
        }
      });
  
      // Minor class adjustments after render
      setTimeout(() => {
        [
          { selector: ".dt-layout-start", classToAdd: "my-0" },
          { selector: ".dt-layout-end", classToAdd: "my-0" },
          { selector: ".dt-layout-table", classToRemove: "row mt-2", classToAdd: "mt-n2" },
          { selector: ".dt-layout-full", classToRemove: "col-md col-12", classToAdd: "table-responsive" }
        ].forEach(({ selector, classToRemove, classToAdd }) => {
          document.querySelectorAll(selector).forEach(el => {
            classToRemove?.split(" ").forEach(cls => el.classList.remove(cls));
            classToAdd?.split(" ").forEach(cls => el.classList.add(cls));
          });
        });
      }, 100);
    }
  });
  