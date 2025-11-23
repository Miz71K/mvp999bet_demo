 <div class="border-b-2 border-white group">
     <div class="sticky top-0 z-20 flex flex-row items-center justify-between p-6 bg-white group-hover:bg-neutral-100">
         <label class="font-bold text-black/50">แบนเนอร์</label>
         <div class="flex flex-row items-center justify-center gap-4">
             <button id="toggle-reorder-banner" class="px-4 py-2 font-bold rounded-lg bg-black/5 text-black/50 hover:bg-black/10">
                 จัดอันดับ
             </button>

             <button id="banner-update" class="px-6 py-2 font-bold text-white bg-green-500 rounded-lg hover:bg-green-600">
                 บันทึก
             </button>
         </div>
     </div>

     <table class="w-full text-sm table-auto group-hover:bg-neutral-100">
         <thead class="border-white border-y-2 bg-black/5">
             <tr class="font-medium text-left text-black/50">
                 <th class="p-6 w-12 h-[90px] border-r-2 text-center border-white">ลำดับ</th>
                 <th class="w-full p-6 border-r-2 border-white">แบนเนอร์ <span class="text-xs font-normal text-red-500">(ขนาด 1000x400 px)</span></th>

                 <th class="drag-handle-banner p-6 w-12 h-[90px] border-r-2 text-center border-white">แสดง</th>
                 <th class="drag-handle-banner p-6 w-12 h-[90px] text-center">
                     <button id="add-banner" type="button" class="flex items-center justify-center w-10 h-10 text-white bg-green-500 rounded-full hover:bg-green-600">
                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-white">
                             <path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z" />
                         </svg>
                     </button>
                 </th>
                 <th class="drag-handle-banner w-12 h-[90px] hidden p-6 border-r-2 text-center border-white">
                     <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-black/50">
                         <path d="M320-440v-287L217-624l-57-56 200-200 200 200-57 56-103-103v287h-80ZM600-80 400-280l57-56 103 103v-287h80v287l103-103 57 56L600-80Z" />
                     </svg>
                 </th>
             </tr>
         </thead>
         <tbody id="tbody-banner" class="divide-y-2 divide-white bg-black/5">
             <?php
                $banners = getBanners();

                foreach ($banners as $index => $banner):
                    $isChecked = $banner['status'] === 1 ? 'checked' : '';
                ?>
                 <tr class="text-sm font-medium text-black/75">
                     <td class="w-12 p-6 font-bold text-center border-r-2 border-white"><?= $index + 1 ?></td>

                     <td class="w-full p-6 border-r-2 border-white">
                         <div class="flex flex-col gap-4">
                             <div class="relative overflow-hidden rounded-lg cursor-pointer image-button group w-14 sm:w-28 aspect-square">
                                 <div class="absolute inset-0 z-10 flex items-center justify-center icon bg-black/5 hover:bg-black/10">
                                     <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-white">
                                         <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z" />
                                     </svg>
                                 </div>

                                 <img src="<?= htmlspecialchars($banner['setting_value']) ?>" class="absolute top-0 left-0 z-0 object-cover w-full h-full pointer-events-none image-preview">
                             </div>
                             <input type="text" name="image_link[]" placeholder="Link" value="<?= $banner['setting_link'] ?>"
                                 class="rounded-lg border border-gray-300 w-full p-2 bg-white focus:ring-2 focus:ring-[<?= $primary_theme_color['setting_value'] ?>] focus:outline-none">

                             <input type="file" accept="image/*" class="hidden image-input">
                             <input type="hidden" name="image_id[]" value="<?= $banner['id'] ?>">
                             <input type="hidden" name="image_url[]" value="<?= htmlspecialchars($banner['setting_value']) ?>">
                         </div>
                     </td>

                     <td class="w-12 p-6 text-center border-r-2 border-white drag-handle-banner">
                         <label class="relative inline-block w-10 h-5 sm:w-20 sm:h-10">
                             <input type="checkbox" class="w-0 h-0 opacity-0 peer" <?= $isChecked ?>>
                             <span class="absolute top-0 bottom-0 left-0 right-0 transition rounded-full cursor-pointer bg-black/5 peer-checked:bg-green-500"></span>
                             <span class="absolute left-[2px] bottom-[2px] w-4 h-4 sm:w-9 sm:h-9 bg-white rounded-full transition peer-checked:translate-x-5 peer-checked:sm:translate-x-10"></span>
                         </label>
                     </td>

                     <td class="w-12 p-6 text-center drag-handle-banner">
                         <button type="button"
                             class="flex items-center justify-center w-10 h-10 text-white bg-red-500 rounded-full delete-banner hover:bg-red-600">
                             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                 class="fill-white">
                                 <path
                                     d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                             </svg>
                         </button>
                     </td>
                     <td class="hidden w-12 p-6 text-center cursor-move drag-handle-banner">
                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-black/50">
                             <path d="M160-360v-80h640v80H160Zm0-160v-80h640v80H160Z" />
                         </svg>
                     </td>
                 </tr>
             <?php endforeach; ?>

         </tbody>
     </table>
 </div>