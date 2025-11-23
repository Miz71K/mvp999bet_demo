<div class="border-b-2 border-white group">
    <div class="sticky top-0 z-20 flex flex-row items-center justify-between p-6 bg-white group-hover:bg-neutral-100">
        <label class="font-bold text-black/50">คำแนะนำการถอน</label>
        <button id="withdraw-info-update" type="button" class="px-6 py-2 font-bold text-white bg-green-500 rounded-lg hover:bg-green-600">
            บันทึก
        </button>
    </div>
    <form class="flex flex-col gap-6 px-6 pb-6 bg-white group-hover:bg-neutral-100">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <div class="flex flex-col col-span-1 gap-1 lg:col-span-2">
                <label for="withdraw_info" class="text-sm font-medium text-black/50">คำแนะนำ</label>
                <textarea id="withdraw_info" name="withdraw_info" required
                    class="rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-[<?= $primary_theme_color['setting_value'] ?>] focus:outline-none"
                    rows="4"><?= $withdraw_info['setting_value'] ?></textarea>
                <input type="hidden" id="withdraw_info_id" name="withdraw_info_id" value="<?= $withdraw_info['id'] ?>" required>
            </div>
        </div>
    </form>
</div>