<div class="border-b-2 border-white group">
    <div class="sticky top-0 z-20 flex flex-row items-center justify-between p-6 bg-white group-hover:bg-neutral-100">
        <label class="font-bold text-black/50">พื้นหลัง</label>
        <button id="background-update" class="px-6 py-2 font-bold text-white bg-green-500 rounded-lg hover:bg-green-600">
            บันทึก
        </button>
    </div>
    <table class="w-full text-sm table-auto group-hover:bg-neutral-100">
        <thead class="border-white border-y-2 bg-black/5">
            <tr class="font-medium text-left text-black/50">
                <th class="w-full p-6 border-r-2 border-white">พื้นหลัง หน้าเข้าสู่ระบบ <span class="text-xs font-normal text-red-500">(ขนาด 1920x1080 px)</span></th>
                <th class="p-6 w-12 h-[90px] text-center">แสดง</th>
            </tr>
        </thead>
        <tbody id="tbody-background" class="divide-y-2 divide-white bg-black/5">
            <tr class="text-sm font-medium text-black/75">
                <td class="w-full p-6 border-r-2 border-white">
                    <div class="relative overflow-hidden rounded-lg cursor-pointer image-button group w-14 sm:w-28 aspect-square">
                        <div class="absolute inset-0 z-10 flex items-center justify-center icon bg-black/5 hover:bg-black/10">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-white">
                                <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z" />
                            </svg>
                        </div>

                        <img src="<?= htmlspecialchars($background['setting_value']) ?>" class="absolute top-0 left-0 z-0 object-cover w-full h-full pointer-events-none image-preview">
                    </div>

                    <input type="file" accept="image/*" class="hidden image-input">
                    <input type="hidden" name="image_id[]" value="<?= $background['id'] ?>">
                    <input type="hidden" name="image_url[]" value="<?= htmlspecialchars($background['setting_value']) ?>">
                </td>
                <td class="w-12 p-6 text-center">
                    <label class="relative inline-block w-10 h-5 sm:w-20 sm:h-10">
                        <input type="checkbox" class="w-0 h-0 opacity-0 peer" <?= $background['status'] === 1 ? 'checked' : null ?>>
                        <span class="absolute top-0 bottom-0 left-0 right-0 transition rounded-full cursor-pointer bg-black/5 peer-checked:bg-green-500"></span>
                        <span class="absolute left-[2px] bottom-[2px] w-4 h-4 sm:w-9 sm:h-9 bg-white rounded-full transition peer-checked:translate-x-5 peer-checked:sm:translate-x-10"></span>
                    </label>
                </td>
            </tr>
        </tbody>
    </table>
</div>