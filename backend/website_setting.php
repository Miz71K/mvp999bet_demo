<?php
require_once 'include/function.php';

if (empty(getSession())) {
    header('location: login');
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once 'template/header.php'; ?>

    <link rel="stylesheet" href="asset/css/jquery-ui.min.css?_=<?= $rnd ?>">
    <script src="asset/js/jquery-ui.min.js?_=<?= $rnd ?>"></script>
    <link rel="stylesheet" href="asset/css/nano.min.css?_=<?= $rnd ?>" />
    <script src="asset/js/pickr.min.js?_=<?= $rnd ?>"></script>
    <style>
        .sortable-placeholder {
            background-color: #ffffff;
            height: 138px;
        }
    </style>

</head>


<body class="bg-linear-[180deg,<?= $primary_theme_color['setting_value'] ?>,<?= $secondary_theme_color['setting_value'] ?>] max-w-[1920px] mx-auto min-h-dvh">

    <?php require_once 'template/loading.php'; ?>

    <div class="flex h-dvh bg-linear-[180deg,<?= $primary_theme_color['setting_value'] ?>,<?= $secondary_theme_color['setting_value'] ?>]">

        <?php require_once 'template/sidebar.php'; ?>

        <div class="flex flex-col flex-1 overflow-y-scroll">

            <div class="grid gap-6 p-6 overflow-hidden">
                <div class="grid gap-6 overflow-y-scroll bg-white shadow-lg rounded-xl">
                    <div class="pb-6">

                        <?php require_once 'template/seo.php'; ?>

                        <?php require_once 'template/contact.php'; ?>

                        <?php require_once 'template/announcement.php'; ?>

                        <?php require_once 'template/deposit_info.php'; ?>

                        <?php require_once 'template/withdraw_info.php'; ?>

                        <?php require_once 'template/affiliate_info.php'; ?>

                        <?php require_once 'template/user_profile.php'; ?>

                        <?php require_once 'template/popup.php'; ?>

                        <?php require_once 'template/logo_auth.php'; ?>

                        <?php require_once 'template/logo_main.php'; ?>

                        <?php require_once 'template/logo_play.php'; ?>

                        <?php require_once 'template/background.php'; ?>

                        <?php require_once 'template/banner.php'; ?>

                        <?php require_once 'template/promotion.php'; ?>

                        <?php if (getUser('role') === "2") require_once 'template/telegram.php';
                        ?>

                        <?php require_once 'template/min_withdraw.php'; ?>
                    </div>
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

        $('#seo-update').click(function() {
            const formData = [{
                    id: $('#title_id').val(),
                    setting_key: 'title',
                    setting_value: $('#title').val()
                },
                {
                    id: $('#keywords_id').val(),
                    setting_key: 'keywords',
                    setting_value: $('#keywords').val()
                },
                {
                    id: $('#description_id').val(),
                    setting_key: 'description',
                    setting_value: $('#description').val()
                }
            ];

            $.ajax({
                url: 'ajax/website_setting.php',
                method: 'POST',
                data: {
                    data: JSON.stringify(formData)
                },
                success: function(res) {
                    notyf.success({
                        message: res.message,
                        duration: 1500
                    });
                },
                error: function(xhr) {
                    console.error('Error saving SEO:', xhr);
                }
            });
        });

        $('#deposit-info-update').click(function() {
            const formData = [{
                id: $('#deposit_info_id').val(),
                setting_key: 'deposit_info',
                setting_value: $('#deposit_info').val()
            }];

            $.ajax({
                url: 'ajax/website_setting.php',
                method: 'POST',
                data: {
                    data: JSON.stringify(formData)
                },
                success: function(res) {
                    notyf.success({
                        message: res.message,
                        duration: 1500
                    });
                },
                error: function(xhr) {
                    console.error('Error saving SEO:', xhr);
                }
            });
        });

        $('#withdraw-info-update').click(function() {
            const formData = [{
                id: $('#withdraw_info_id').val(),
                setting_key: 'withdraw_info',
                setting_value: $('#withdraw_info').val()
            }];

            $.ajax({
                url: 'ajax/website_setting.php',
                method: 'POST',
                data: {
                    data: JSON.stringify(formData)
                },
                success: function(res) {
                    notyf.success({
                        message: res.message,
                        duration: 1500
                    });
                },
                error: function(xhr) {
                    console.error('Error saving SEO:', xhr);
                }
            });
        });

        $('#affiliate-info-update').click(function() {
            const formData = [{
                id: $('#affiliate_info_id').val(),
                setting_key: 'affiliate_info',
                setting_value: $('#affiliate_info').val()
            }];

            $.ajax({
                url: 'ajax/website_setting.php',
                method: 'POST',
                data: {
                    data: JSON.stringify(formData)
                },
                success: function(res) {
                    notyf.success({
                        message: res.message,
                        duration: 1500
                    });
                },
                error: function(xhr) {
                    console.error('Error saving SEO:', xhr);
                }
            });
        });

        $('#contact-update').click(function() {
            const formData = [{
                id: $('#line_contact_link_id').val(),
                setting_key: 'line_contact_link',
                setting_value: $('#line_contact_link').val()
            }];

            $.ajax({
                url: 'ajax/website_setting.php',
                method: 'POST',
                data: {
                    data: JSON.stringify(formData)
                },
                success: function(res) {
                    notyf.success({
                        message: res.message,
                        duration: 1500
                    });
                },
                error: function(xhr) {
                    console.error('Error saving contact info:', xhr);
                }
            });
        });

        $('#announcement-update').click(function() {
            const formData = [{
                id: $('#announcement_id').val(),
                setting_key: 'announcement',
                setting_value: $('#announcement').val()
            }];

            $.ajax({
                url: 'ajax/website_setting.php',
                method: 'POST',
                data: {
                    data: JSON.stringify(formData)
                },
                success: function(res) {
                    notyf.success({
                        message: res.message,
                        duration: 1500
                    });
                },
                error: function(xhr) {
                    console.error('Error saving contact info:', xhr);
                }
            });
        });

        $('#logo-auth-update').on('click', function(e) {
            e.preventDefault();

            const logo = [];

            $('#t-logo-auth tr').each(function(index) {
                const id = $(this).find('input[name="image_id[]"]').val();
                const imageUrl = $(this).find('input[name="image_url[]"]').val();
                // const status = $(this).find('input[type="checkbox"]').is(':checked') ? 1 : 0;

                if (imageUrl.trim() !== '') {
                    logo.push({
                        id: id,
                        setting_key: 'logo_auth',
                        setting_value: imageUrl
                    });
                }
            });

            $.ajax({
                url: 'ajax/website_setting.php',
                method: 'POST',
                data: {
                    data: JSON.stringify(logo)
                },
                success: function(res) {
                    if (res.status_code === 200) {
                        notyf.success({
                            message: res.message,
                            duration: 1500
                        });
                    } else {
                        Swal.fire('ผิดพลาด', res.message || 'บันทึกไม่สำเร็จ', 'error');
                    }
                },
                error: function() {
                    Swal.fire('ผิดพลาด', 'เกิดข้อผิดพลาดระหว่างการส่งข้อมูล', 'error');
                }
            });
        });

        $('#logo-main-update').on('click', function(e) {
            e.preventDefault();

            const logo = [];

            $('#t-logo-main tr').each(function(index) {
                const id = $(this).find('input[name="image_id[]"]').val();
                const imageUrl = $(this).find('input[name="image_url[]"]').val();
                // const status = $(this).find('input[type="checkbox"]').is(':checked') ? 1 : 0;

                if (imageUrl.trim() !== '') {
                    logo.push({
                        id: id,
                        setting_key: 'logo_main',
                        setting_value: imageUrl
                    });
                }
            });

            $.ajax({
                url: 'ajax/website_setting.php',
                method: 'POST',
                data: {
                    data: JSON.stringify(logo)
                },
                success: function(res) {
                    if (res.status_code === 200) {
                        notyf.success({
                            message: res.message,
                            duration: 1500
                        });
                    } else {
                        Swal.fire('ผิดพลาด', res.message || 'บันทึกไม่สำเร็จ', 'error');
                    }
                },
                error: function() {
                    Swal.fire('ผิดพลาด', 'เกิดข้อผิดพลาดระหว่างการส่งข้อมูล', 'error');
                }
            });
        });

        $('#logo-play-update').on('click', function(e) {
            e.preventDefault();

            const logo = [];

            $('#t-logo-play tr').each(function(index) {
                const id = $(this).find('input[name="image_id[]"]').val();
                const imageUrl = $(this).find('input[name="image_url[]"]').val();
                // const status = $(this).find('input[type="checkbox"]').is(':checked') ? 1 : 0;

                if (imageUrl.trim() !== '') {
                    logo.push({
                        id: id,
                        setting_key: 'logo_play',
                        setting_value: imageUrl
                    });
                }
            });

            $.ajax({
                url: 'ajax/website_setting.php',
                method: 'POST',
                data: {
                    data: JSON.stringify(logo)
                },
                success: function(res) {
                    if (res.status_code === 200) {
                        notyf.success({
                            message: res.message,
                            duration: 1500
                        });
                    } else {
                        Swal.fire('ผิดพลาด', res.message || 'บันทึกไม่สำเร็จ', 'error');
                    }
                },
                error: function() {
                    Swal.fire('ผิดพลาด', 'เกิดข้อผิดพลาดระหว่างการส่งข้อมูล', 'error');
                }
            });
        });

        $('#user-profile-update').on('click', function(e) {
            e.preventDefault();

            const logo = [];

            $('#t-user-profile tr').each(function(index) {
                const id = $(this).find('input[name="image_id[]"]').val();
                const imageUrl = $(this).find('input[name="image_url[]"]').val();
                // const status = $(this).find('input[type="checkbox"]').is(':checked') ? 1 : 0;

                if (imageUrl.trim() !== '') {
                    logo.push({
                        id: id,
                        setting_key: 'user_profile',
                        setting_value: imageUrl
                    });
                }
            });

            $.ajax({
                url: 'ajax/website_setting.php',
                method: 'POST',
                data: {
                    data: JSON.stringify(logo)
                },
                success: function(res) {
                    if (res.status_code === 200) {
                        notyf.success({
                            message: res.message,
                            duration: 1500
                        });
                    } else {
                        Swal.fire('ผิดพลาด', res.message || 'บันทึกไม่สำเร็จ', 'error');
                    }
                },
                error: function() {
                    Swal.fire('ผิดพลาด', 'เกิดข้อผิดพลาดระหว่างการส่งข้อมูล', 'error');
                }
            });
        });

        $('#popup-update').on('click', function(e) {
            e.preventDefault();

            const logo = [];

            $('#t-popup tr').each(function(index) {
                const id = $(this).find('input[name="image_id[]"]').val();
                const imageUrl = $(this).find('input[name="image_url[]"]').val();
                const status = $(this).find('input[type="checkbox"]').is(':checked') ? 1 : 0;

                if (imageUrl.trim() !== '') {
                    logo.push({
                        id: id,
                        setting_key: 'popup',
                        setting_value: imageUrl,
                        status: status
                    });
                }
            });

            $.ajax({
                url: 'ajax/website_setting.php',
                method: 'POST',
                data: {
                    data: JSON.stringify(logo)
                },
                success: function(res) {
                    if (res.status_code === 200) {
                        notyf.success({
                            message: res.message,
                            duration: 1500
                        });
                    } else {
                        Swal.fire('ผิดพลาด', res.message || 'บันทึกไม่สำเร็จ', 'error');
                    }
                },
                error: function() {
                    Swal.fire('ผิดพลาด', 'เกิดข้อผิดพลาดระหว่างการส่งข้อมูล', 'error');
                }
            });
        });

        $('#background-update').on('click', function(e) {
            e.preventDefault();

            const background = [];

            $('#tbody-background tr').each(function(index) {
                const id = $(this).find('input[name="image_id[]"]').val();
                const imageUrl = $(this).find('input[name="image_url[]"]').val();
                const status = $(this).find('input[type="checkbox"]').is(':checked') ? 1 : 0;

                if (imageUrl.trim() !== '') {
                    background.push({
                        id: id,
                        setting_key: 'background',
                        setting_value: imageUrl,
                        status: status
                    });
                }
            });

            $.ajax({
                url: 'ajax/website_setting.php',
                method: 'POST',
                data: {
                    data: JSON.stringify(background)
                },
                success: function(res) {
                    if (res.status_code === 200) {
                        notyf.success({
                            message: res.message,
                            duration: 1500
                        });
                    } else {
                        Swal.fire('ผิดพลาด', res.message || 'บันทึกไม่สำเร็จ', 'error');
                    }
                },
                error: function() {
                    Swal.fire('ผิดพลาด', 'เกิดข้อผิดพลาดระหว่างการส่งข้อมูล', 'error');
                }
            });
        });

        $('#telegram-update').click(function() {
            const formData = [{
                    id: $('#telegram_bot_token_id').val(),
                    setting_key: 'telegram_bot_token',
                    setting_value: $('#telegram_bot_token').val()
                },
                {
                    id: $('#telegram_otp_chat_id_id').val(),
                    setting_key: 'telegram_otp_chat_id',
                    setting_value: $('#telegram_otp_chat_id').val()
                }
            ];

            $.ajax({
                url: 'ajax/website_setting.php',
                method: 'POST',
                data: {
                    data: JSON.stringify(formData)
                },
                success: function(res) {
                    notyf.success({
                        message: res.message,
                        duration: 1500
                    });
                },
                error: function(xhr) {
                    console.error('Error saving SEO:', xhr);
                }
            });
        });
        $('#min-withdraw-update').click(function() {
            const formData = [{
                id: $('#min_withdraw_id').val(),
                setting_key: 'min_withdraw',
                setting_value: $('#min_withdraw').val()
            }];

            $.ajax({
                url: 'ajax/website_setting.php',
                method: 'POST',
                data: {
                    data: JSON.stringify(formData)
                },
                success: function(res) {
                    notyf.success({
                        message: res.message,
                        duration: 1500
                    });
                },
                error: function(xhr) {
                    console.error('Error saving SEO:', xhr);
                }
            });
        });

        $(document).ready(function() {
            let bannerIndex = <?= count($banners) ?>;
            let deletedBannerIds = [];

            const $tableBanner = $('#tbody-banner');

            $tableBanner.sortable({
                items: 'tr',
                axis: 'y',
                handle: '.drag-handle-banner',
                placeholder: 'sortable-placeholder',
                snap: true,
                helper: function(e, tr) {
                    const $originals = tr.children();
                    const $helper = tr.clone();

                    $helper.children().each(function(index) {
                        $(this).width($originals.eq(index).outerWidth());
                    });

                    const tableWidth = tr.closest('table').outerWidth();
                    $helper.css({
                        display: 'table',
                        width: tableWidth,
                        'table-layout': 'fixed'
                    });

                    return $helper;
                },
                start: function() {
                    $tableBanner.find('tr').addClass('bg-white/50 backdrop-blur-sm rounded-xl');
                    $tableBanner.find('tr').each((i, tr) => {
                        $(tr).find('td:nth-child(-n+3)').removeClass('border-r-2');
                    });
                },
                stop: function() {
                    $tableBanner.find('tr').removeClass('bg-white/50 backdrop-blur-sm rounded-xl');
                    $tableBanner.find('tr').each((i, tr) => {
                        $(tr).find('td:nth-child(-n+3)').addClass('border-r-2');
                        $(tr).find('td:first').text(i + 1);
                    });
                }
            }).disableSelection().sortable('disable');

            $('#toggle-reorder-banner').on('change', function() {
                const enabled = $(this).is(':checked');
                $tableBanner.sortable(enabled ? 'enable' : 'disable');
                $('.drag-handle-banner').toggleClass('hidden', !enabled);
            });

            let isBannerReOrderMode = false;

            $('#toggle-reorder-banner').on('click', function() {
                isBannerReOrderMode = !isBannerReOrderMode;

                if (isBannerReOrderMode) {
                    $(this)
                        .removeClass('bg-black/5 hover:bg-black/10 text-black/50')
                        .addClass('bg-green-500 hover:bg-green-600 text-white');
                    $('#tbody-banner').sortable('enable');
                    $('.drag-handle-banner').toggleClass('hidden');
                } else {
                    $(this)
                        .removeClass('bg-green-500 hover:bg-green-600 text-white')
                        .addClass('bg-black/5 hover:bg-black/10 text-black/50');
                    $('#tbody-banner').sortable('disable');
                    $('.drag-handle-banner').toggleClass('hidden');
                }
            });

            $('#add-banner').on('click', function() {
                bannerIndex++;

                const newRow = `
                    <tr class="text-sm font-medium text-black/75">
                        <td class="w-12 p-6 font-bold text-center border-r-2 border-white">${bannerIndex}</td>

                        <td class="w-full p-6 border-r-2 border-white">
                            <div class="flex flex-col gap-4">
                                <div class="relative flex items-center justify-center overflow-hidden rounded-lg cursor-pointer add-image image-button group w-14 sm:w-28 aspect-square bg-black/5 hover:bg-black/10">
                                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='white' viewBox='0 0 16 16'%3E%3Cpath d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/%3E%3C/svg%3E"
                                        class="absolute w-6 h-6 -translate-x-1/2 -translate-y-1/2 icon top-1/2 left-1/2">
                                </div>
                                <input type="text" name="image_link[]" value="" placeholder="Link" class="rounded-lg border border-gray-300 w-full p-2 bg-white focus:ring-2 focus:ring-[<?= $primary_theme_color['setting_value'] ?>] focus:outline-none">
                                <input type="file" class="hidden image-input" accept="image/*">
                                <input type="hidden" name="image_url[]" value="">
                            </div>
                        </td>
                        <td class="w-12 p-6 text-center border-r-2 border-white drag-handle-banner">
                            <label class="relative inline-block w-10 h-5 sm:w-20 sm:h-10">
                                <input type="checkbox" class="w-0 h-0 opacity-0 peer" checked name="banner_status[]">
                                <span class="absolute top-0 bottom-0 left-0 right-0 transition rounded-full cursor-pointer bg-black/5 peer-checked:bg-green-500"></span>
                                <span class="absolute left-[2px] bottom-[2px] w-4 h-4 sm:w-9 sm:h-9 bg-white rounded-full transition peer-checked:translate-x-5 peer-checked:sm:translate-x-10"></span>
                            </label>
                        </td>

                        <td class="w-12 p-6 text-center drag-handle-banner">
                            <button type="button" class="flex items-center justify-center w-10 h-10 text-white bg-red-500 rounded-full delete-banner hover:bg-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-white">
                                <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360Z"/>
                                </svg>
                            </button>
                        </td>

                        <td class="p-6 w-12 drag-handle-banner text-center cursor-move ${isBannerReOrderMode ? '' : 'hidden'}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-black/50">
                                <path d="M160-360v-80h640v80H160Zm0-160v-80h640v80H160Z" />
                            </svg>
                        </td>
                    </tr>`;

                $('#tbody-banner').append(newRow);
            });

            $(document).on('click', '.delete-banner', function() {
                const $row = $(this).closest('tr');
                const bannerId = $row.find('input[name="image_id[]"]').val();

                if (bannerId) {
                    Swal.fire({
                        title: 'คุณแน่ใจหรือไม่?',
                        text: 'คุณต้องการลบแบนเนอร์นี้ใช่หรือไม่?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '<?= $primary_theme_color['setting_value'] ?>',
                        confirmButtonText: 'ใช่, ลบเลย',
                        cancelButtonText: 'ยกเลิก'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            deletedBannerIds.push(bannerId);
                            $row.remove();
                            reIndexBannerRows();
                        }
                    });
                } else {
                    $row.remove();
                    reIndexBannerRows();
                }
            });

            function reIndexBannerRows() {
                $('#tbody-banner tr').each((i, row) => {
                    $(row).find('td:first').text(i + 1);
                });
                bannerIndex = $('#tbody-banner tr').length;
            }


            $(document).on('click', '.image-button', function() {
                $(this).closest('td').find('.image-input').click();
            });

            $(document).on('change', '.image-input', function(e) {
                const file = e.target.files[0];
                if (!file) return;

                const $td = $(this).closest('td');
                const $button = $td.find('.image-button');
                const $icon = $button.find('.icon');
                const $existingImage = $button.find('img');

                const formData = new FormData();
                formData.append('file', file); // no cloud-specific preset

                $.ajax({
                    url: 'ajax/upload.php', // ← your local PHP upload handler
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $icon.remove();
                        $existingImage.remove();

                        const $loader = $('<div>')
                            .attr('id', 'upload-spinner')
                            .addClass('w-6 h-6 border-2 border-white border-t-transparent rounded-full animate-spin absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2');

                        $button.append($loader);
                    },
                    success: function(res) {
                        $button.find('#upload-spinner').remove();

                        const imageUrl = res; // PHP returns image URL string

                        const $img = $('<img>')
                            .attr('src', imageUrl)
                            .addClass('image-preview absolute top-0 left-0 w-full h-full object-cover');

                        $button.append($img);

                        const $overlay = $(`
                            <div class="absolute inset-0 z-10 flex items-center justify-center bg-black/5 hover:bg-black/10">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="icon fill-white">
                                <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z"/>
                                </svg>
                            </div>
                        `);
                        $button.append($overlay);

                        $td.find('input[name="image_url[]"]').val(imageUrl);
                    },
                    error: function(err) {
                        $button.find('#upload-spinner').remove();
                        console.error('❌ Upload failed:', err);
                        alert('Upload failed!');
                    }
                });
            });

            $('#banner-update').on('click', function(e) {
                e.preventDefault();

                const banners = [];

                $('#tbody-banner tr').each(function(index) {
                    $(this).find('td:first').text(index + 1);

                    const id = $(this).find('input[name="image_id[]"]').val();
                    const imageUrl = $(this).find('input[name="image_url[]"]').val();
                    const imageLink = $(this).find('input[name="image_link[]"]').val() || '';
                    const status = $(this).find('input[type="checkbox"]').is(':checked') ? 1 : 0;

                    if (imageUrl.trim() !== '') {
                        banners.push({
                            id: id,
                            order_id: index,
                            setting_key: 'banner',
                            setting_value: imageUrl,
                            setting_link: imageLink,
                            status: status
                        });
                    }
                });

                $.ajax({
                    url: 'ajax/website_setting.php',
                    method: 'POST',
                    data: {
                        data: JSON.stringify(banners),
                        delete: JSON.stringify(deletedBannerIds)
                    },
                    success: function(res) {
                        if (res.status_code === 200) {
                            notyf.success({
                                message: res.message,
                                duration: 1500
                            });
                        } else {
                            Swal.fire('ผิดพลาด', res.message || 'บันทึกไม่สำเร็จ', 'error');
                        }
                    },
                    error: function() {
                        Swal.fire('ผิดพลาด', 'เกิดข้อผิดพลาดระหว่างการส่งข้อมูล', 'error');
                    }
                });
            });

            let promotionIndex = <?= count($promotions) ?>;
            let deletedPromotionIds = [];

            const $tablePromotion = $('#tbody-promotion');

            $tablePromotion.sortable({
                items: 'tr',
                axis: 'y',
                handle: '.drag-handle-promotion',
                placeholder: 'sortable-placeholder',
                snap: true,
                helper: function(e, tr) {
                    const $originals = tr.children();
                    const $helper = tr.clone();

                    $helper.children().each(function(index) {
                        $(this).width($originals.eq(index).outerWidth());
                    });

                    const tableWidth = tr.closest('table').outerWidth();
                    $helper.css({
                        display: 'table',
                        width: tableWidth,
                        'table-layout': 'fixed'
                    });

                    return $helper;
                },
                start: function() {
                    $tablePromotion.find('tr').addClass('bg-white/50 backdrop-blur-sm rounded-xl');
                    $tablePromotion.find('tr').each((i, tr) => {
                        $(tr).find('td:nth-child(-n+3)').removeClass('border-r-2');
                    });
                },
                stop: function() {
                    $tablePromotion.find('tr').removeClass('bg-white/50 backdrop-blur-sm rounded-xl');
                    $tablePromotion.find('tr').each((i, tr) => {
                        $(tr).find('td:nth-child(-n+3)').addClass('border-r-2');
                        $(tr).find('td:first').text(i + 1);
                    });
                }
            }).disableSelection().sortable('disable');

            let isPromotionReOrderMode = false;

            $('#toggle-reorder-promotion').on('click', function() {
                isPromotionReOrderMode = !isPromotionReOrderMode;

                if (isPromotionReOrderMode) {
                    $(this)
                        .removeClass('bg-black/5 hover:bg-black/10 text-black/50')
                        .addClass('bg-green-500 hover:bg-green-600 text-white');
                    $('#tbody-promotion').sortable('enable');
                    $('.drag-handle-promotion').toggleClass('hidden');
                } else {
                    $(this)
                        .removeClass('bg-green-500 hover:bg-green-600 text-white')
                        .addClass('bg-black/5 hover:bg-black/10 text-black/50');
                    $('#tbody-promotion').sortable('disable');
                    $('.drag-handle-promotion').toggleClass('hidden');
                }
            });

            $('#add-promotion').on('click', function() {
                promotionIndex++;

                const newRow = `
            <tr class="text-sm font-medium text-black/75">
                <td class="w-12 p-6 font-bold text-center border-r-2 border-white">${promotionIndex}</td>

                <td class="w-full p-6 border-r-2 border-white">
                    <div class="flex flex-col gap-4">
                        <div class="relative flex items-center justify-center overflow-hidden rounded-lg cursor-pointer add-image image-button group w-14 sm:w-28 aspect-square bg-black/5 hover:bg-black/10">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='white' viewBox='0 0 16 16'%3E%3Cpath d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/%3E%3C/svg%3E"
                                class="absolute w-6 h-6 -translate-x-1/2 -translate-y-1/2 icon top-1/2 left-1/2">
                        </div>
                        
                        <input type="text" name="promotion_link[]" value="" placeholder="Link" class="rounded-lg border border-gray-300 w-full p-2 bg-white focus:ring-2 focus:ring-[<?= $primary_theme_color['setting_value'] ?>] focus:outline-none">
                        <input type="file" class="hidden image-input" accept="image/*">
                        <input type="hidden" name="image_url[]" value="">
                    </div>
                </td>

                <td class="w-12 p-6 text-center border-r-2 border-white drag-handle-promotion">
                    <label class="relative inline-block w-10 h-5 sm:w-20 sm:h-10">
                        <input type="checkbox" class="w-0 h-0 opacity-0 peer" checked name="promotion_status[]">
                        <span class="absolute top-0 bottom-0 left-0 right-0 transition rounded-full cursor-pointer bg-black/5 peer-checked:bg-green-500"></span>
                        <span class="absolute left-[2px] bottom-[2px] w-4 h-4 sm:w-9 sm:h-9 bg-white rounded-full transition peer-checked:translate-x-5 peer-checked:sm:translate-x-10"></span>
                    </label>
                </td>

                <td class="w-12 p-6 text-center drag-handle-promotion">
                    <button type="button" class="flex items-center justify-center w-10 h-10 text-white bg-red-500 rounded-full delete-promotion hover:bg-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-white">
                            <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360Z"/>
                        </svg>
                    </button>
                </td>

                <td class="p-6 w-12 drag-handle-promotion text-center cursor-move ${isPromotionReOrderMode ? '' : 'hidden'}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-black/50">
                        <path d="M160-360v-80h640v80H160Zm0-160v-80h640v80H160Z" />
                    </svg>
                </td>
            </tr>`;

                $('#tbody-promotion').append(newRow);
            });

            $(document).on('click', '.delete-promotion', function() {
                const $row = $(this).closest('tr');
                const promotionId = $row.find('input[name="promotion_id[]"]').val();

                if (promotionId) {
                    Swal.fire({
                        title: 'คุณแน่ใจหรือไม่?',
                        text: 'คุณต้องการลบโปรโมชั่นนี้ใช่หรือไม่?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '<?= $primary_theme_color['setting_value'] ?>',
                        confirmButtonText: 'ใช่, ลบเลย',
                        cancelButtonText: 'ยกเลิก'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            deletedPromotionIds.push(promotionId);
                            $row.remove();
                            reIndexPromotionRows();
                        }
                    });
                } else {
                    $row.remove();
                    reIndexPromotionRows();
                }
            });

            function reIndexPromotionRows() {
                $('#tbody-promotion tr').each((i, row) => {
                    $(row).find('td:first').text(i + 1);
                });
                promotionIndex = $('#tbody-promotion tr').length;
            }

            $('#promotion-update').on('click', function(e) {
                e.preventDefault();

                const promotions = [];

                $('#tbody-promotion tr').each(function(index) {
                    $(this).find('td:first').text(index + 1);

                    const id = $(this).find('input[name="promotion_id[]"]').val();
                    const imageUrl = $(this).find('input[name="image_url[]"]').val();
                    const imageLink = $(this).find('input[name="promotion_link[]"]').val() || '';
                    const status = $(this).find('input[type="checkbox"]').is(':checked') ? 1 : 0;

                    if (imageUrl.trim() !== '') {
                        promotions.push({
                            id: id,
                            order_id: index,
                            setting_key: 'promotion',
                            setting_value: imageUrl,
                            setting_link: imageLink,
                            status: status
                        });
                    }
                });

                $.ajax({
                    url: 'ajax/website_setting.php',
                    method: 'POST',
                    data: {
                        data: JSON.stringify(promotions),
                        delete: JSON.stringify(deletedPromotionIds)
                    },
                    success: function(res) {
                        if (res.status_code === 200) {
                            notyf.success({
                                message: res.message,
                                duration: 1500
                            });
                        } else {
                            Swal.fire('ผิดพลาด', res.message || 'บันทึกไม่สำเร็จ', 'error');
                        }
                    },
                    error: function() {
                        Swal.fire('ผิดพลาด', 'เกิดข้อผิดพลาดระหว่างการส่งข้อมูล', 'error');
                    }
                });
            });
        });
    </script>
</body>

</html>