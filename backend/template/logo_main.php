<div class="border-b-2 border-white group">
    <div class="sticky top-0 z-20 flex flex-row items-center justify-between p-6 bg-white group-hover:bg-neutral-100">
        <label class="font-bold text-black/50">โลโก้ หน้าหลัก</label>
        <button id="logo-main-update" class="px-6 py-2 font-bold text-white bg-green-500 rounded-lg hover:bg-green-600">
            บันทึก
        </button>
    </div>
    <table class="w-full text-sm table-auto group-hover:bg-neutral-100">
        <thead class="border-white border-y-2 bg-black/5">
            <tr class="font-medium text-left text-black/50">
                <th class="p-6 h-[90px] w-full">โลโก้ หน้าหลัก</th>
            </tr>
        </thead>
        <tbody id="t-logo-main" class="divide-y-2 divide-white bg-black/5">
            <tr class="text-sm font-medium text-black/75">
                <td class="w-full p-6">
                    <div class="relative overflow-hidden rounded-lg cursor-pointer image-button group w-14 sm:w-28 aspect-square">
                        <div class="absolute inset-0 z-10 flex items-center justify-center icon bg-black/5 hover:bg-black/10">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-white">
                                <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z" />
                            </svg>
                        </div>

                        <img src="<?= htmlspecialchars($logo_main['setting_value']) ?>" class="absolute top-0 left-0 z-0 object-cover w-full h-full pointer-events-none image-preview">
                    </div>

                    <input type="file" accept="image/*" class="hidden image-input">
                    <input type="hidden" name="image_id[]" value="<?= $logo_main['id'] ?>">
                    <input type="hidden" name="image_url[]" value="<?= htmlspecialchars($logo_main['setting_value']) ?>">
                </td>
            </tr>
        </tbody>
    </table>
</div>