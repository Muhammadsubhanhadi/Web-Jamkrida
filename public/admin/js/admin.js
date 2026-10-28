document.addEventListener("DOMContentLoaded", () => {


    /* =====================================================
       LOADING
    ===================================================== */

    const loader =
        document.getElementById("pageLoader");


    setTimeout(() => {

        if (loader) {

            loader.classList.add("hide");

        }

    }, 500);




    /* =====================================================
       SIDEBAR DESKTOP
    ===================================================== */

    const sidebarToggle =
        document.getElementById("sidebarToggle");


    if (sidebarToggle) {

        sidebarToggle.addEventListener(
            "click",
            () => {

                document.body.classList.toggle(
                    "sidebar-collapsed"
                );


                localStorage.setItem(
                    "sidebarCollapsed",
                    document.body.classList.contains(
                        "sidebar-collapsed"
                    )
                );

            }
        );

    }


    if (
        localStorage.getItem(
            "sidebarCollapsed"
        ) === "true"
    ) {

        document.body.classList.add(
            "sidebar-collapsed"
        );

    }



    /* =====================================================
       SIDEBAR DROPDOWN
    ===================================================== */

    const dropdowns =
        document.querySelectorAll(
            ".menu-dropdown"
        );


    dropdowns.forEach((dropdown) => {

        const button =
            dropdown.querySelector(
                ".menu-dropdown-toggle"
            );


        if (!button) return;


        button.addEventListener(
            "click",
            (event) => {

                event.preventDefault();


                /* Jangan buka submenu saat
                   sidebar sedang collapsed */

                if (
                    document.body.classList.contains(
                        "sidebar-collapsed"
                    )
                ) {

                    return;

                }


                const isOpen =
                    dropdown.classList.contains(
                        "open"
                    );


                /* Accordion:
                   tutup dropdown lain */

                dropdowns.forEach((item) => {

                    if (item !== dropdown) {

                        item.classList.remove(
                            "open"
                        );


                        const itemButton =
                            item.querySelector(
                                ".menu-dropdown-toggle"
                            );


                        itemButton?.setAttribute(
                            "aria-expanded",
                            "false"
                        );

                    }

                });


                /* Toggle */

                dropdown.classList.toggle(
                    "open",
                    !isOpen
                );


                button.setAttribute(
                    "aria-expanded",
                    !isOpen
                );

            }
        );

    });



    /* =====================================================
       AUTO OPEN ACTIVE DROPDOWN
    ===================================================== */

    dropdowns.forEach((dropdown) => {

        const activeItem =
            dropdown.querySelector(
                ".menu-subitem.active"
            );


        if (activeItem) {

            dropdown.classList.add(
                "open"
            );


            const button =
                dropdown.querySelector(
                    ".menu-dropdown-toggle"
                );


            button?.setAttribute(
                "aria-expanded",
                "true"
            );

        }

    });



    /* =====================================================
       MOBILE SIDEBAR
    ===================================================== */

    const mobileMenu =
        document.getElementById("mobileMenu");


    const sidebar =
        document.getElementById("sidebar");


    const sidebarClose =
        document.getElementById(
            "sidebarClose"
        );


    const overlay =
        document.getElementById(
            "sidebarOverlay"
        );


    function openSidebar() {

        sidebar?.classList.add(
            "open"
        );


        overlay?.classList.add(
            "show"
        );


        document.body.style.overflow =
            "hidden";

    }


    function closeSidebar() {

        sidebar?.classList.remove(
            "open"
        );


        overlay?.classList.remove(
            "show"
        );


        document.body.style.overflow =
            "";

    }


    mobileMenu?.addEventListener(
        "click",
        openSidebar
    );


    sidebarClose?.addEventListener(
        "click",
        closeSidebar
    );


    overlay?.addEventListener(
        "click",
        closeSidebar
    );



    /* =====================================================
       DARK MODE
    ===================================================== */

    const darkToggle =
        document.getElementById(
            "darkToggle"
        );


    if (
        localStorage.getItem(
            "darkMode"
        ) === "true"
    ) {

        document.body.classList.add(
            "dark"
        );

    }


    function updateDarkModeIcon() {

        if (!darkToggle) return;


        const icon =
            darkToggle.querySelector(
                "i"
            );


        if (!icon) return;


        if (
            document.body.classList.contains(
                "dark"
            )
        ) {

            icon.classList.remove(
                "fa-moon"
            );

            icon.classList.add(
                "fa-sun"
            );

        } else {

            icon.classList.remove(
                "fa-sun"
            );

            icon.classList.add(
                "fa-moon"
            );

        }

    }


    updateDarkModeIcon();


    darkToggle?.addEventListener(
        "click",
        () => {

            document.body.classList.toggle(
                "dark"
            );


            localStorage.setItem(
                "darkMode",
                document.body.classList.contains(
                    "dark"
                )
            );


            updateDarkModeIcon();

        }
    );



    /* =====================================================
       PREMIUM CURSOR
    ===================================================== */

    const cursorDot =
        document.querySelector(
            ".cursor-dot"
        );


    const cursorOutline =
        document.querySelector(
            ".cursor-outline"
        );


    let mouseX = 0;
    let mouseY = 0;

    let outlineX = 0;
    let outlineY = 0;


    document.addEventListener(
        "mousemove",
        (event) => {

            mouseX =
                event.clientX;

            mouseY =
                event.clientY;


            if (cursorDot) {

                cursorDot.style.left =
                    mouseX + "px";

                cursorDot.style.top =
                    mouseY + "px";

            }

        }
    );


    function animateCursor() {

        outlineX +=
            (mouseX - outlineX) * 0.12;


        outlineY +=
            (mouseY - outlineY) * 0.12;


        if (cursorOutline) {

            cursorOutline.style.left =
                outlineX + "px";

            cursorOutline.style.top =
                outlineY + "px";

        }


        requestAnimationFrame(
            animateCursor
        );

    }


    animateCursor();


    document
        .querySelectorAll(
            "button, a, input, select, textarea"
        )
        .forEach((element) => {

            element.addEventListener(
                "mouseenter",
                () => {

                    cursorOutline?.classList.add(
                        "active"
                    );

                }
            );


            element.addEventListener(
                "mouseleave",
                () => {

                    cursorOutline?.classList.remove(
                        "active"
                    );

                }
            );

        });


    document.addEventListener(
        "mousedown",
        () => {

            cursorOutline?.classList.add(
                "clicking"
            );

        }
    );


    document.addEventListener(
        "mouseup",
        () => {

            cursorOutline?.classList.remove(
                "clicking"
            );

        }
    );



    /* =====================================================
       TOAST
    ===================================================== */

    window.showToast =
        function(
            message,
            type = "success"
        ) {

            const container =
                document.getElementById(
                    "toastContainer"
                );


            if (!container) return;


            const toast =
                document.createElement(
                    "div"
                );


            toast.className =
                "toast";


            let icon =
                "fa-circle-check";


            if (
                type === "error"
            ) {

                icon =
                    "fa-circle-xmark";

            }


            if (
                type === "warning"
            ) {

                icon =
                    "fa-triangle-exclamation";

            }


            toast.innerHTML = `

                <i class="fa-solid ${icon}"></i>

                <span>${message}</span>

            `;


            container.appendChild(
                toast
            );


            setTimeout(
                () => {

                    toast.classList.add(
                        "remove"
                    );


                    setTimeout(
                        () => {

                            toast.remove();

                        },
                        300
                    );

                },
                3000
            );

        };



    /* =====================================================
       DELETE MODAL
    ===================================================== */

    const deleteModal =
        document.getElementById(
            "deleteModal"
        );


    const confirmDelete =
        document.getElementById(
            "confirmDelete"
        );


    window.openDeleteModal =
        function(id = null) {

            if (!deleteModal) return;


            deleteModal.classList.add(
                "show"
            );


            deleteModal.dataset.id =
                id ?? "";

        };


    function closeDeleteModal() {

        deleteModal?.classList.remove(
            "show"
        );

    }


    document
        .querySelectorAll(
            "[data-close-modal]"
        )
        .forEach((button) => {

            button.addEventListener(
                "click",
                closeDeleteModal
            );

        });


    deleteModal?.addEventListener(
        "click",
        (event) => {

            if (
                event.target ===
                deleteModal
            ) {

                closeDeleteModal();

            }

        }
    );


    confirmDelete?.addEventListener(
        "click",
        () => {

            closeDeleteModal();


            showToast(
                "Data berhasil dihapus"
            );

        }
    );



    /* =====================================================
       RIPPLE BUTTON
    ===================================================== */

    document
        .querySelectorAll(
            ".btn"
        )
        .forEach((button) => {

            button.addEventListener(
                "click",
                function(event) {

                    const ripple =
                        document.createElement(
                            "span"
                        );


                    ripple.style.position =
                        "absolute";

                    ripple.style.borderRadius =
                        "50%";

                    ripple.style.pointerEvents =
                        "none";

                    ripple.style.width =
                        "10px";

                    ripple.style.height =
                        "10px";

                    ripple.style.background =
                        "rgba(255,255,255,.4)";

                    ripple.style.left =
                        event.offsetX + "px";

                    ripple.style.top =
                        event.offsetY + "px";

                    ripple.style.transform =
                        "translate(-50%,-50%)";

                    ripple.style.animation =
                        "ripple .5s ease-out";


                    this.style.position =
                        "relative";

                    this.style.overflow =
                        "hidden";


                    this.appendChild(
                        ripple
                    );


                    setTimeout(
                        () => ripple.remove(),
                        500
                    );

                }
            );

        });



    /* =====================================================
       TABLE SEARCH
    ===================================================== */

    document
        .querySelectorAll(
            "[data-table-search]"
        )
        .forEach((input) => {

            input.addEventListener(
                "input",
                function() {

                    const table =
                        document.querySelector(
                            this.dataset.tableSearch
                        );


                    if (!table) return;


                    const keyword =
                        this.value.toLowerCase();


                    table
                        .querySelectorAll(
                            "tbody tr"
                        )
                        .forEach((row) => {

                            row.style.display =
                                row.textContent
                                    .toLowerCase()
                                    .includes(
                                        keyword
                                    )
                                    ? ""
                                    : "none";

                        });

                }
            );

        });



    /* =====================================================
       IMAGE UPLOAD PREVIEW
    ===================================================== */

    document
        .querySelectorAll(
            "[data-image-upload]"
        )
        .forEach((input) => {

            input.addEventListener(
                "change",
                function() {

                    const file =
                        this.files[0];


                    if (!file) return;


                    const preview =
                        document.querySelector(
                            this.dataset.imageUpload
                        );


                    if (!preview) return;


                    if (
                        file.type.startsWith(
                            "image/"
                        )
                    ) {

                        const reader =
                            new FileReader();


                        reader.onload =
                            (event) => {

                                preview.src =
                                    event.target.result;

                                preview.style.display =
                                    "block";

                            };


                        reader.readAsDataURL(
                            file
                        );

                    }

                }
            );

        });



    /* =====================================================
       DRAG & DROP
    ===================================================== */

    document
        .querySelectorAll(
            ".upload-box"
        )
        .forEach((box) => {

            box.addEventListener(
                "dragover",
                (event) => {

                    event.preventDefault();

                    box.classList.add(
                        "dragover"
                    );

                }
            );


            box.addEventListener(
                "dragleave",
                () => {

                    box.classList.remove(
                        "dragover"
                    );

                }
            );


            box.addEventListener(
                "drop",
                (event) => {

                    event.preventDefault();

                    box.classList.remove(
                        "dragover"
                    );


                    showToast(
                        "File berhasil dipilih"
                    );

                }
            );

        });



    /* =====================================================
       CTRL + K
    ===================================================== */

    document.addEventListener(
        "keydown",
        (event) => {

            if (
                (event.ctrlKey ||
                 event.metaKey)
                &&
                event.key.toLowerCase()
                === "k"
            ) {

                event.preventDefault();


                document
                    .getElementById(
                        "globalSearch"
                    )
                    ?.focus();

            }


            if (
                event.key ===
                "Escape"
            ) {

                closeDeleteModal();

                closeSidebar();


                dropdowns.forEach(
                    (dropdown) => {

                        dropdown.classList.remove(
                            "open"
                        );


                        dropdown
                            .querySelector(
                                ".menu-dropdown-toggle"
                            )
                            ?.setAttribute(
                                "aria-expanded",
                                "false"
                            );

                    }
                );

            }

        }
    );



    /* =====================================================
       SIMPLE REVEAL ANIMATION
    ===================================================== */

    const animatedElements =
        document.querySelectorAll(
            ".stat-card, .panel, .form-panel"
        );


    animatedElements.forEach(
        (element, index) => {

            element.style.opacity =
                "0";


            element.style.transform =
                "translateY(15px)";


            setTimeout(
                () => {

                    element.style.transition =
                        "opacity .5s ease, transform .5s ease";


                    element.style.opacity =
                        "1";


                    element.style.transform =
                        "translateY(0)";

                },
                100 + index * 70
            );

        }
    );

});

// ==========================================
// LOGOUT CONFIRMATION
// ==========================================

document.addEventListener('DOMContentLoaded', function () {

    const logoutForm = document.querySelector('.logout-form');

    if (logoutForm) {

        logoutForm.addEventListener('submit', function (e) {

            const confirmLogout = confirm(
                'Apakah Anda yakin ingin keluar dari halaman admin?'
            );

            if (!confirmLogout) {
                e.preventDefault();
            }

        });

    }

});



/* ==========================================
   CAREER DROPDOWN - JAVASCRIPT KHUSUS
========================================== */

document.querySelectorAll('.career-dropdown').forEach((dropdown) => {
    const toggle = dropdown.querySelector('.career-dropdown-toggle');

    if (!toggle) return;

    toggle.addEventListener('click', () => {
        const isOpen = dropdown.classList.toggle('open');

        toggle.setAttribute('aria-expanded', String(isOpen));
    });
});
