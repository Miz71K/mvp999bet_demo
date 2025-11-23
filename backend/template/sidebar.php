<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<div x-data="{ openMenu: true }">
    <div class="bg-[<?= $primary_theme_color['setting_value'] ?>] text-[<?= $text_theme_color['setting_value'] ?>] h-full fixed md:static shadow-lg top-0 left-0 z-30">
        <!-- <button class="absolute px-4 py-2 bg-black -right-10 top-2 rounded-r-xl"><</button> -->

        <nav class="flex flex-col w-full h-full">
            <button @click="openMenu = !openMenu" class="absolute -right-10 bg-linear-[180deg,<?= $primary_theme_color['setting_value'] ?>,<?= $secondary_theme_color['setting_value'] ?>] top-13 shadow-lg rounded-r-xl px-4 py-2 md:hidden">
                <span x-show="!openMenu" x-cloak>
                    <i class="fad fa-bars"></i>
                </span>
                <span x-show="openMenu" x-cloak>
                    <i class="fad fa-times"></i>
                </span>
            </button>
            <div x-show="openMenu" x-cloak x-transition class="flex flex-col items-center justify-between h-full gap-4 p-4">

                <div class="flex flex-col items-center gap-4 overflow-hidden">

                    <img src="<?= $logo_main['setting_value'] ?>" alt="logo" width="175" height="150" class="inline pointer-events-none" />

                    <ul class="flex flex-col w-full overflow-y-scroll">

                        <?php
                        if (getUser('role') >= 1) {
                        ?>
                            <li x-data="{ open: false }">
                                <a @click="open = !open" class="block py-2 pr-2 rounded-xl hover:bg-linear-[180deg,<?= $primary_theme_color['setting_value'] ?>,<?= $secondary_theme_color['setting_value'] ?>] flex items-center transition-all duration-500 text-[<?= $text_theme_color['setting_value'] ?>]/50 hover:text-[<?= $text_theme_color['setting_value'] ?>] cursor-pointer">
                                    <i class="w-10 text-center fad fa-cog"></i> <span class="pr-4">ตั้งค่า</span> <i class="ml-auto fad fa-angle-right" :class="{ 'rotate-90': open }"></i>
                                </a>
                                <ul x-show="open">
                                    <li><a href="website_setting" class="block py-2 pr-2 rounded-xl flex items-center transition-all duration-500 <?= ($current_page == 'website_setting.php') ? 'bg-linear-[180deg,' . $primary_theme_color['setting_value']   . ',' . $secondary_theme_color['setting_value']  . '] text-[' . $text_theme_color['setting_value'] . ']' : 'text-[' . $text_theme_color['setting_value'] . ']/50 hover:bg-linear-[180deg,' . $primary_theme_color['setting_value']   . ',' . $secondary_theme_color['setting_value']  . '] hover:text-[' . $text_theme_color['setting_value'] . ']' ?>"><i class="w-10 text-center fad fa-minus"></i> ตั้งค่าเว็บไซต์</a></li>
                                </ul>
                            </li>
                        <?php
                        }
                        ?>
                        <?php
                        if (getUser('role') == 2) {
                        ?>

                            <li x-data="{ open: false }">
                                <a @click="open = !open" class="block py-2 pr-2 rounded-xl hover:bg-linear-[180deg,<?= $primary_theme_color['setting_value'] ?>,<?= $secondary_theme_color['setting_value'] ?>] flex items-center transition-all duration-500 text-[<?= $text_theme_color['setting_value'] ?>]/50 hover:text-[<?= $text_theme_color['setting_value'] ?>] cursor-pointer">
                                    <i class="w-10 text-center fad fa-tasks"></i> <span class="pr-4"> จัดการผู้ใช้</span> <i class="ml-auto fad fa-angle-right" :class="{ 'rotate-90': open }"></i>
                                </a>
                                <ul x-show="open">
                                    <li><a href="add_user" class="block py-2 pr-2 rounded-xl flex items-center transition-all duration-500 <?= ($current_page == 'add_user.php') ? 'bg-linear-[180deg,' . $primary_theme_color['setting_value']   . ',' . $secondary_theme_color['setting_value']  . '] text-[' . $text_theme_color['setting_value'] . ']' : 'text-[' . $text_theme_color['setting_value'] . ']/50 hover:bg-linear-[180deg,' . $primary_theme_color['setting_value']   . ',' . $secondary_theme_color['setting_value']  . '] hover:text-[' . $text_theme_color['setting_value'] . ']' ?>"><i class="w-10 text-center fad fa-minus"></i> เพิ่มผู้ใช้</a></li>
                        
                                </ul>
                            </li>

                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <button onclick="Logout()" class="flex items-center block w-full py-2 pr-2 text-white transition-all duration-500 bg-red-500 cursor-pointer rounded-xl hover:bg-red-900"><i class="w-10 text-center fad fa-sign-out"></i> ออกจากระบบ</button>
            </div>
        </nav>
    </div>
    <!-- <div x-show="openMenu" x-cloak x-transition class="fixed z-20 w-screen h-screen bg-black/50 backdrop-blur-sm"></div> -->

</div>