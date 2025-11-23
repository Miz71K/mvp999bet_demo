<?php
require_once 'include/function.php';

if (empty(getSession())) {
    header('location: login');
    exit();
}

if (getUser('role') != 2) {
    header('location: /backend');
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once 'template/header.php'; ?>

    <link rel="stylesheet" href="asset/css/jquery.dataTables.min.css?_=<?= $rnd ?>">
    <script src="asset/js/jquery.dataTables.min.js?_=<?= $rnd ?>"></script>

</head>

<body class="bg-linear-[180deg,<?= $primary_theme_color['setting_value'] ?>,<?= $secondary_theme_color['setting_value'] ?>] max-w-[1920px] mx-auto min-h-dvh">
    <div id="loadingOverlay" class="fixed inset-0 z-50 flex items-center justify-center bg-black/75 backdrop-blur-sm min-h-dvh">
        <img src="<?= $logo['setting_value'] ?>" alt="logo" width="160" height="160" class="inline animate-pulse" />
    </div>
    <div class="flex h-dvh bg-linear-[180deg,<?= $primary_theme_color['setting_value'] ?>,<?= $secondary_theme_color['setting_value'] ?>]">

        <?php require_once 'template/sidebar.php'; ?>

        <div class="flex flex-col flex-1 overflow-y-scroll">

            <div class="grid w-full gap-6 p-6">
                <form id="add_user_form" class="flex flex-col gap-6 p-6 bg-white shadow-lg rounded-xl">

                    <label class="font-bold text-black/50">เพิ่มผู้ใช้</label>
                    <div class="grid grid-cols-1 gap-6 lg:grid-cols-6">

                        <!-- Phone Number -->
                        <div class="flex flex-col col-span-1 gap-1 lg:col-span-2">
                            <label for="username" class="text-sm font-medium text-black/50">ชื่อผู้ใช้</label>
                            <input type="text" id="username" name="username" required
                                class="rounded-lg flex flex-grow border border-gray-300 p-2 focus:ring-2 focus:ring-[<?= $primary_theme_color['setting_value'] ?>] focus:outline-none"
                                placeholder="ชื่อผู้ใช้">
                        </div>
                        <div class="flex flex-col col-span-1 gap-1 lg:col-span-2">
                            <label for="password" class="text-sm font-medium text-black/50">รหัสผ่าน</label>
                            <input type="text" id="password" name="password" required
                                class="rounded-lg flex flex-grow border border-gray-300 p-2 focus:ring-2 focus:ring-[<?= $primary_theme_color['setting_value'] ?>] focus:outline-none"
                                placeholder="รหัสผ่าน">
                        </div>

                        <!-- payment Selection -->
                        <div class="flex flex-col col-span-1 gap-1 lg:col-span-2">
                            <label for="payment" class="text-sm font-medium text-black/50">ตำแหน่ง</label>
                            <div class="relative">
                                <div id="role-dropdown-btn"
                                    class="flex items-center justify-between w-full p-2 border rounded-lg cursor-pointer text-neutral-900 whitespace-nowrap border-neutral-300 focus:bg-neutral-200 focus:ring-2 focus:ring-blue-500">
                                    <span id="role-selected-html" class="flex items-center space-x-2">
                                        <span class="text-black/50">โปรดเลือกตำแหน่ง</span>
                                    </span>
                                    <svg class="w-5 h-5 text-neutral-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>

                                <div id="role-dropdown-menu"
                                    class="absolute z-10 hidden w-full mt-2 overflow-y-auto bg-white border rounded-lg whitespace-nowrap border-neutral-300 max-h-60">
                                    <div class="flex items-center p-2 space-x-2 cursor-pointer role-option hover:bg-neutral-200" data-role="2">
                                        <span class="text-black/50">Operator</span>
                                    </div>
                                    <div class="flex items-center p-2 space-x-2 cursor-pointer role-option hover:bg-neutral-200" data-role="1">
                                        <span class="text-black/50">Admin</span>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="role" name="role" required>
                        </div>
                    </div>
                    <button id="submit-form" type="submit" class="transition-all duration-500 bg-[<?= $primary_theme_color['setting_value'] ?>] hover:bg-linear-[180deg,<?= $primary_theme_color['setting_value']  ?>,<?= $secondary_theme_color['setting_value'] ?>] text-[<?= $text_theme_color['setting_value'] ?>] font-bold py-2 px-4 rounded-lg w-full">
                        เพิ่มผู้ใช้
                    </button>

                </form>

                <div class="flex flex-col gap-6 p-6 overflow-x-scroll bg-white shadow-lg rounded-xl">

                    <label class="font-bold text-black/50">ผูใช้ทั้งหมด</label>
                    <table id="myTable" class="text-xs stripe hover cell-border row-border order-column">
                        <thead class="text-white bg-black/50">
                            <tr class="text-left">
                                <th class="px-4 py-2">สถานะ</th>
                                <th class="px-4 py-2">ชื่อผู้ใช้</th>
                                <th class="px-4 py-2">ตำแหน่ง</th>
                                <th class="px-4 py-2">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>

    <script src="asset/js/notyf.min.js?_=<?= $rnd ?>"></script>
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
        $('#loadingOverlay').show();

        $(window).on('load', function() {
            NProgress.done();

            $('#loadingOverlay').fadeOut(300);
        });

        $(document).ready(function() {

            $("#role-dropdown-btn").click(function() {
                $("#role-dropdown-menu").toggleClass("hidden");
            });

            $(document).click(function(e) {
                if (!$("#role-dropdown-btn").is(e.target) && $("#role-dropdown-btn").has(e.target).length === 0 &&
                    !$("#role-dropdown-menu").is(e.target) && $("#role-dropdown-menu").has(e.target).length === 0) {
                    $("#role-dropdown-menu").addClass("hidden");
                }
            });

            $(".role-option").click(function() {
                let selectedHtml = $(this).html();
                let selectedCode = $(this).data("role");

                $("#role-selected-html").html(selectedHtml);
                $("#role").val(selectedCode);
                $("#role-dropdown-menu").addClass("hidden");
            });

            $('#add_user_form').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url: 'ajax/add_user.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    beforeSend: function() {
                        $('#submit-form').prop('disabled', true);
                    },
                    success: function(response) {
                        if (response.status_code === 201) {
                            notyf.success({
                                message: response.message,
                                duration: 1500,
                            });

                            $('#myTable').DataTable().ajax.reload(null, false);

                            const defaultRoleHtml = `<span class="text-black/50">โปรดเลือกธนาคาร</span>`;

                            $('#role-selected-html').html(defaultRoleHtml);
                            $('#add_user_form')[0].reset();
                            $('#submit-form').prop('disabled', false);
                        } else {
                            notyf.error({
                                message: response.message,
                                duration: 3000
                            });
                            $('#submit-form').prop('disabled', false);
                        }
                    },
                    error: function() {
                        $('#submit-form').prop('disabled', false);
                    }
                });
            });
            $('#myTable').DataTable({
                ajax: "ajax/user_list.php",
                columns: [{
                        data: "status",
                        render: function(data, type, row) {
                            const isChecked = data == 'active' ? 'checked' : '';
                            return `
                                <label class="relative inline-block w-10 h-5">
                                    <input type="checkbox" class="w-0 h-0 opacity-0 status-switch peer" data-id="${row.user_id}" ${isChecked}>
                                    <span class="absolute top-0 bottom-0 left-0 right-0 transition rounded-full cursor-pointer bg-black/5 peer-checked:bg-green-500"></span>
                                    <span class="absolute left-[2px] bottom-[2px] w-4 h-4 bg-white rounded-full transition peer-checked:translate-x-5"></span>
                                </label>
                            `;
                        }
                    },
                    {
                        data: "username"
                    },
                    {
                        data: "role",
                        render: function(data, type, row) {
                            if (data == 1) {
                                return 'Admin';
                            } else if (data == 2) {
                                return 'Operator';
                            } else {
                                return 'Unknown';
                            }
                        }
                    },
                    {
                        data: "user_id",
                        render: function(data, type, row) {
                            return `
                                <div class="flex flex-row items-center gap-2">
                                    <button class="flex flex-col items-center justify-center w-8 h-8 gap-2 text-red-500 border border-red-500 delete-btn hover:bg-red-500 hover:text-white border-1" data-id="${data}" title="Delete User">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5a.5.5 0 0 1 .5.5V12a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zM8 5.5a.5.5 0 0 1 .5.5V12a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zM10.5 5.5a.5.5 0 0 1 .5.5V12a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1 0-2h3.118a1 1 0 0 1 .94.658L7.5 2h1l.942-.342A1 1 0 0 1 10.382 2H13.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118z"/>
                                        </svg>
                                    </button>
                                </div>
                            `;
                        }
                    }

                ],
                paging: true,
                searching: true,
                info: false,
                order: [
                    [0, 'desc']
                ],
                autoWidth: false,
                responsive: true,
                language: {
                    search: "ค้นหา",
                    lengthMenu: "_MENU_ รายการ",
                    loadingRecords: "กำลังโหลด",
                    zeroRecords: "ไม่พบข้อมูลดังกล่าว",
                    emptyTable: "ไม่พบข้อมูลในระบบ"
                }
            });
            $('#myTable').on('change', '.status-switch', function() {
                const userId = $(this).data('id');
                const newStatus = $(this).is(':checked') ? 'active' : 'inactive';

                $.ajax({
                    url: 'ajax/update_user_status.php',
                    method: 'POST',
                    data: {
                        user_id: userId,
                        status: newStatus
                    },
                    success: function(response) {
                        console.log(response);
                        $('#myTable').DataTable().ajax.reload(null, false);
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        alert('Error updating status');
                        $('#myTable').DataTable().ajax.reload(null, false);
                    }
                });
            });
            $('#myTable').on('click', '.delete-btn', function() {
                const userId = $(this).data('id');

                Swal.fire({
                    title: 'ยืนยันการลบ',
                    text: 'คุณต้องการลบผู้ใช้นี้หรือไม่?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'ลบ',
                    cancelButtonText: 'ยกเลิก'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: 'ajax/delete_user.php',
                            method: 'POST',
                            data: {
                                user_id: userId
                            },
                            success: function(response) {
                                if (response.status_code === 200) {
                                    Swal.fire('ลบแล้ว!', response.message, 'success');
                                    $('#myTable').DataTable().ajax.reload(null, false);
                                } else {
                                    Swal.fire('ผิดพลาด', response.message, 'error');
                                }
                            },
                            error: function(xhr) {
                                console.error(xhr.responseText);
                                Swal.fire('ผิดพลาด', 'เกิดข้อผิดพลาดในการเชื่อมต่อเซิร์ฟเวอร์', 'error');
                            }
                        });
                    }
                });
            });

        });

        const notyf = new Notyf({
            ripple: false,
            position: {
                x: "right",
                y: "top"
            }
        });

        function Logout() {
            $.ajax({
                method: 'POST',
                url: 'ajax/logout.php',
                cache: false,
            }).done(function(response) {
                console.log(response);
                if (response.status_code === 200) {
                    notyf.success({
                        message: response.message,
                        duration: 1500
                    });

                    setTimeout(() => {
                        window.location.href = 'login';
                    }, 1500);
                }
            }).fail(function(response) {
                console.log(response);
            });
        }
    </script>
</body>

</html>