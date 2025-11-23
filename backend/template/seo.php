<div class="border-b-2 border-white group">
    <div class="sticky top-0 z-20 flex flex-row items-center justify-between p-6 bg-white group-hover:bg-neutral-100">
        <label class="font-bold text-black/50">SEO</label>
        <button id="seo-update" type="button" class="px-6 py-2 font-bold text-white bg-green-500 rounded-lg hover:bg-green-600">
            บันทึก
        </button>
    </div>
    <form class="flex flex-col gap-6 px-6 pb-6 bg-white group-hover:bg-neutral-100">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <div class="flex flex-col col-span-1 gap-1">
                <label for="title" class="text-sm font-medium text-black/50">Title</label>
                <input type="text" id="title" name="title" value="<?= $title['setting_value'] ?>" required
                    class="rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-[<?= $primary_theme_color['setting_value'] ?>] focus:outline-none">
                <input type="hidden" id="title_id" name="title_id" value="<?= $title['id'] ?>" required>
            </div>
            <div class="flex flex-col col-span-1 gap-1">
                <label for="keywords" class="text-sm font-medium text-black/50">Keywords</label>
                <input type="text" id="keywords" name="keywords" value="<?= $keywords['setting_value'] ?>" required
                    class="rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-[<?= $primary_theme_color['setting_value'] ?>] focus:outline-none">
                <input type="hidden" id="keywords_id" name="keywords_id" value="<?= $keywords['id'] ?>" required>
            </div>
            <div class="flex flex-col col-span-1 gap-1 lg:col-span-2">
                <label for="description" class="text-sm font-medium text-black/50">Description</label>
                <textarea id="description" name="description" required
                    class="rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-[<?= $primary_theme_color['setting_value'] ?>] focus:outline-none"
                    rows="4"><?= $description['setting_value'] ?></textarea>
                <input type="hidden" id="description_id" name="description_id" value="<?= $description['id'] ?>" required>
            </div>
        </div>
    </form>
</div>