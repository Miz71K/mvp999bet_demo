<div class="swiper banner">
    <div class="swiper-wrapper">
        <?php
        $banners = getBanners();
        $activeBanners = array_filter($banners, fn($banner) => $banner['status'] === 1);

        if (count($activeBanners) > 0):
            foreach (array_values($activeBanners) as $index => $banner): ?>
                <div class="swiper-slide" data-swiper-autoplay="5000">
                    <a href="<?= $banner['setting_link'] ? htmlspecialchars($banner['setting_link'], ENT_QUOTES, 'UTF-8') : '#' ?>">
                        <img src="<?= htmlspecialchars($banner['setting_value'], ENT_QUOTES, 'UTF-8') ?>"
                             alt="Banner <?= $index + 1 ?>">
                    </a>
                </div>
            <?php endforeach;
        else: ?>
            <div class="swiper-slide">
                <img src="https://placehold.co/1000x400" alt="Banner">
            </div>
        <?php endif; ?>
    </div>

    <?php if (count($activeBanners) > 1): ?>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    <?php endif; ?>
</div>
