document.addEventListener("DOMContentLoaded", function (e) {
  let s, a, r, n = (s = config.colors.borderColor, a = config.colors.bodyBg, r = config.colors.headingColor, document.querySelector(".datatables-order")), o = { 1: { title: "Dispatched", class: "bg-label-warning" }, 2: { title: "Delivered", class: "bg-label-success" }, 3: { title: "Out for Delivery", class: "bg-label-primary" }, 4: { title: "Ready to Pickup", class: "bg-label-info" } }, l = { 1: { title: "Paid", class: "text-success" }, 2: { title: "Pending", class: "text-warning" }, 3: { title: "Failed", class: "text-danger" }, 4: { title: "Cancelled", class: "text-secondary" } }; if (n) {
    let t = new DataTable(n, {
      ajax: assetsPath + "json/ecommerce-customer-order.json", columns: [{ data: "id" }, { data: "id", orderable: !1, render: DataTable.render.select() }, { data: "order" }, { data: "date" }, { data: "customer" }, { data: "payment" }, { data: "status" }, { data: "method" }, { data: "id" }], columnDefs: [{ className: "control", searchable: !1, orderable: !1, responsivePriority: 2, targets: 0, render: function (e, t, s, a) { return "" } }, { targets: 1, orderable: !1, searchable: !1, responsivePriority: 3, checkboxes: !0, checkboxes: { selectAllRender: '<input type="checkbox" class="form-check-input">' }, render: function () { return '<input type="checkbox" class="dt-checkboxes form-check-input">' } }, { targets: 2, render: function (e, t, s, a) { return '<a href="app-ecommerce-order-details.html"><span>#' + s.order + "</span></a>" } }, { targets: 3, render: function (e, t, s, a) { var r = new Date(s.date), s = s.time.substring(0, 5); return `<span class="text-nowrap">${r.toLocaleDateString("en-US", { month: "short", day: "numeric", year: "numeric" })}, ${s}</span>` } }, {
        targets: 4, responsivePriority: 1, render: function (e, t, s, a) {
          var r = s.customer, n = s.email, s = s.avatar; let o; return `
              <div class="d-flex justify-content-start align-items-center order-name text-nowrap">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-3">
                    ${o = s ? `<img src="${assetsPath}img/avatars/${s}" alt="Avatar" class="rounded-circle">` : `<span class="avatar-initial rounded-circle bg-label-${["success", "danger", "warning", "info", "dark", "primary", "secondary"][Math.floor(6 * Math.random())]}">${(r.match(/\b\w/g) || []).slice(0, 2).join("").toUpperCase()}</span>`}
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <h6 class="m-0"><a href="pages-profile-user.html" class="text-heading">${r}</a></h6>
                  <small>${n}</small>
                </div>
              </div>`}
      }, {
        targets: 5, render: function (e, t, s, a) {
          s = s.payment, s = l[s]; return s ? `
                <h6 class="mb-0 align-items-center d-flex w-px-100 ${s.class}">
                  <i class="icon-base ti tabler-circle-filled icon-12px me-1"></i>${s.title}
                </h6>`: e
        }
      }, {
        targets: -3, render: function (e, t, s, a) {
          s = s.status, s = o[s]; return s ? `
                <span class="badge px-2 ${s.class} text-capitalized">
                  ${s.title}
                </span>`: e
        }
      }, {
        targets: -2, render: function (e, t, s, a) {
          var r = s.method; let n = "paypal" === r ? "@gmail.com" : s.method_number; return `
              <div class="d-flex align-items-center text-nowrap">
                <img src="${assetsPath}img/icons/payments/${r}.png" alt="${r}" width="29">
                <span><i class="icon-base ti tabler-dots mt-1 me-1"></i>${n}</span>
              </div>`}
      }, {
        targets: -1, title: "Actions", searchable: !1, orderable: !1, render: function (e, t, s, a) {
          return `
              <div class="d-flex justify-content-sm-start align-items-sm-center">
                <button class="btn btn-text-secondary rounded-pill waves-effect btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="icon-base ti tabler-dots-vertical"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end m-0">
                  <a href="app-ecommerce-order-details.html" class="dropdown-item">View</a>
                  <a href="javascript:void(0);" class="dropdown-item delete-record">Delete</a>
                </div>
              </div>`}
      }], select: { style: "multi", selector: "td:nth-child(2)" }, order: [3, "asc"], layout: { topStart: { search: { placeholder: "Search Order", text: "_INPUT_" } }, topEnd: { rowClass: "row mx-3 my-0 justify-content-between", features: [{ pageLength: { menu: [7, 10, 25, 50, 100], text: "_MENU_" } }, { buttons: [{ extend: "collection", className: "btn btn-label-primary dropdown-toggle", text: '<span class="d-flex align-items-center gap-1"><i class="icon-base ti tabler-upload icon-xs"></i> <span class="d-none d-sm-inline-block">Export</span></span>', buttons: [{ extend: "print", text: '<span class="d-flex align-items-center"><i class="icon-base ti tabler-printer me-1"></i>Print</span>', className: "dropdown-item", exportOptions: { columns: [3, 4, 5, 6, 7], format: { body: function (e, t, s) { if (e.length <= 0) return e; e = (new DOMParser).parseFromString(e, "text/html").body.childNodes; let a = ""; return e.forEach(e => { e.classList && e.classList.contains("user-name") ? a += e.lastChild.firstChild.textContent : a += e.textContent || e.innerText || "" }), a } } }, customize: function (e) { e.document.body.style.color = r, e.document.body.style.borderColor = s, e.document.body.style.backgroundColor = a; e = e.document.body.querySelector("table"); e.classList.add("compact"), e.style.color = "inherit", e.style.borderColor = "inherit", e.style.backgroundColor = "inherit" } }, { extend: "csv", text: '<span class="d-flex align-items-center"><i class="icon-base ti tabler-file me-1"></i>Csv</span>', className: "dropdown-item", exportOptions: { columns: [3, 4, 5, 6, 7], format: { body: function (e, t, s) { if (e.length <= 0) return e; e = (new DOMParser).parseFromString(e, "text/html").body.childNodes; let a = ""; return e.forEach(e => { e.classList && e.classList.contains("user-name") ? a += e.lastChild.firstChild.textContent : a += e.textContent || e.innerText || "" }), a } } } }, { extend: "excel", text: '<span class="d-flex align-items-center"><i class="icon-base ti tabler-upload me-1"></i>Excel</span>', className: "dropdown-item", exportOptions: { columns: [3, 4, 5, 6, 7], format: { body: function (e, t, s) { if (e.length <= 0) return e; e = (new DOMParser).parseFromString(e, "text/html").body.childNodes; let a = ""; return e.forEach(e => { e.classList && e.classList.contains("user-name") ? a += e.lastChild.firstChild.textContent : a += e.textContent || e.innerText || "" }), a } } } }, { extend: "pdf", text: '<span class="d-flex align-items-center"><i class="icon-base ti tabler-file-text me-1"></i>Pdf</span>', className: "dropdown-item", exportOptions: { columns: [3, 4, 5, 6, 7], format: { body: function (e, t, s) { if (e.length <= 0) return e; e = (new DOMParser).parseFromString(e, "text/html").body.childNodes; let a = ""; return e.forEach(e => { e.classList && e.classList.contains("user-name") ? a += e.lastChild.firstChild.textContent : a += e.textContent || e.innerText || "" }), a } } } }, { extend: "copy", text: '<i class="icon-base ti tabler-copy me-1"></i>Copy', className: "dropdown-item", exportOptions: { columns: [3, 4, 5, 6, 7], format: { body: function (e, t, s) { if (e.length <= 0) return e; e = (new DOMParser).parseFromString(e, "text/html").body.childNodes; let a = ""; return e.forEach(e => { e.classList && e.classList.contains("user-name") ? a += e.lastChild.firstChild.textContent : a += e.textContent || e.innerText || "" }), a } } } }] }] }] }, bottomStart: { rowClass: "row mx-3 justify-content-between", features: ["info"] }, bottomEnd: "paging" }, language: { paginate: { next: '<i class="icon-base ti tabler-chevron-right scaleX-n1-rtl icon-18px"></i>', previous: '<i class="icon-base ti tabler-chevron-left scaleX-n1-rtl icon-18px"></i>', first: '<i class="icon-base ti tabler-chevrons-left scaleX-n1-rtl icon-18px"></i>', last: '<i class="icon-base ti tabler-chevrons-right scaleX-n1-rtl icon-18px"></i>' } }, responsive: {
        details: {
          display: DataTable.Responsive.display.modal({ header: function (e) { return "Details of " + e.data().customer } }), type: "column", renderer: function (e, t, s) {
            var a, r, n, s = s.map(function (e) {
              return "" !== e.title ? `<tr data-dt-row="${e.rowIndex}" data-dt-column="${e.columnIndex}">
                      <td>${e.title}:</td>
                      <td>${e.data}</td>
                    </tr>`: ""
            }).join(""); return !!s && ((a = document.createElement("div")).classList.add("table-responsive"), r = document.createElement("table"), a.appendChild(r), r.classList.add("table"), (n = document.createElement("tbody")).innerHTML = s, r.appendChild(n), a)
          }
        }
      }
    }); document.addEventListener("click", function (e) { e.target.classList.contains("delete-record") && (t.row(e.target.closest("tr")).remove().draw(), e = document.querySelector(".dtr-bs-modal")) && e.classList.contains("show") && bootstrap.Modal.getInstance(e)?.hide() })
  } setTimeout(() => { [{ selector: ".dt-buttons .btn", classToRemove: "btn-secondary", classToAdd: "btn-label-secondary" }, { selector: ".dt-search .form-control", classToRemove: "form-control-sm", classToAdd: "ms-0" }, { selector: ".dt-length .form-select", classToRemove: "form-select-sm" }, { selector: ".dt-layout-table", classToRemove: "row mt-2" }, { selector: ".dt-layout-end", classToAdd: "gap-md-2 gap-0" }, { selector: ".dt-layout-full", classToRemove: "col-md col-12", classToAdd: "table-responsive" }].forEach(({ selector: e, classToRemove: s, classToAdd: a }) => { document.querySelectorAll(e).forEach(t => { s && s.split(" ").forEach(e => t.classList.remove(e)), a && a.split(" ").forEach(e => t.classList.add(e)) }) }) }, 100)
});