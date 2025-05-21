<?php

function renderProjectCard($link, $image, $title, $description, $techIcons = [])
{
    $cdnBase = "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/";
    ?>
    <a href="<?= $link ?>" target="_blank" class="text-decoration-none text-white">
        <div class="surface-card m-0 h-100 d-flex flex-column justify-content-between position-relative">
            <img src="<?= $image ?>" class="mb-3 p-2" alt="Project Screenshot">
            <div class="text-white">
                <h5 class="mb-1"><?= htmlspecialchars($title) ?></h5>
                <p class="text-light small"><?= htmlspecialchars($description) ?></p>
                <div class="d-flex flex-wrap align-items-center gap-2">
                    <?php foreach ($techIcons as $icon): ?>
                        <img src="<?= $cdnBase . $icon ?>" width="20" alt="Tech Icon">
                    <?php endforeach; ?>
                    <span class="ms-auto position-relative z-2">
                        <i class="fas fa-external-link-alt fa-lg text-white link-icon"></i>
                    </span>
                </div>
            </div>
            <span class="stretched-link"></span>
        </div>
    </a>
    <?php
}

function renderBreadcrumb($items)
{
    ?>
    <section class="py-2 surface-background">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-0" style="font-size: 0.95rem;">
                    <?php
                    $lastIndex = count($items) - 1;
                    foreach ($items as $index => $item):
                        if ($index === $lastIndex): ?>
                            <li class="breadcrumb-item active"><?= htmlspecialchars($item['label']) ?></li>
                        <?php else: ?>
                            <li class="breadcrumb-item">
                                <a href="<?= $item['url'] ?>" class="text-decoration-none font-secondary">
                                    <?= htmlspecialchars($item['label']) ?>
                                </a>
                            </li>
                        <?php endif;
                    endforeach; ?>
                </ol>
            </nav>
        </div>
    </section>
    <?php
}

function renderIntro($title, $description, $imagePath, $linkUrl = null, $linkLabel = "View Live Site")
{
    ?>
    <section class="full-screen-section">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-title"><?= htmlspecialchars($title) ?></h2>
                <p class="lead"><?= htmlspecialchars($description) ?></p>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                    <img src="<?= $imagePath ?>" class="w-100" alt="">
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <?php if ($linkUrl): ?>
                    <div class="col-sm-12 col-md-3 d-flex justify-content-center">

                        <a href="<?= $linkUrl ?>" class="btn btn-outline mt-2 px-4 w-100" target="_blank">
                            <i class="fa fa-solid fa-link"></i> <?= htmlspecialchars($linkLabel) ?>
                        </a>
                    </div>

                <?php else: ?>
                    <p class="mt-2 text-center" style="color: var(--text-secondary)">System is available for authorized users only</p>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <?php
}

function renderAbout($title = "About the Project", $paragraphs = [])
{
    ?>
    <section class="mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="surface-card height-fit">
                        <h3 class="mb-2 d-flex justify-content-center font-bold">
                            <span class="sub-title"><?= htmlspecialchars($title) ?></span>
                        </h3>

                        <div class="body-text">
                            <?php foreach ($paragraphs as $p): ?>
                                <p><?= htmlspecialchars($p) ?></p>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}

function renderGoals($goals, $columns = 4)
{
    // تأكد أن القيمة بين 1 و 12
    $col = max(1, min(12, $columns));
    $colClass = "col-md-$col col-sm-12 mb-3";
    ?>
    <section class="my-5 py-3">
        <div class="container">
            <h3 class="mb-2 d-flex justify-content-center font-bold">
                <span class="sub-title">Goals</span>
            </h3>
            <div class="row justify-content-center">
                <?php foreach ($goals as $goal): ?>
                    <div class="<?= $colClass ?>">
                        <div class="surface-card text-center m-0">
                            <i class="fa-solid <?= $goal['icon'] ?> mb-3" style="font-size: 28px; color: var(--secondary);"></i>
                            <p><?= $goal['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
}


function renderTechStack($techStack)
{
    ?>
    <section class="my-5 py-3">
        <div class="container">
            <h3 class="mb-2 d-flex justify-content-center font-bold">
                <span class="sub-title">Tech Stack</span>
            </h3>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <?php foreach ($techStack as $tech): ?>
                    <div class="tool-card tool-item <?= $tech['type'] ?>">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/<?= $tech['img'] ?>/<?= $tech['img'] ?>-original.svg"
                             alt="<?= $tech['name'] ?>" />
                        <p class="tool-label"><?= $tech['name'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
}


function renderFeatures($features, $title = "Key Features")
{
    ?>
    <section class="my-5 py-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="surface-card height-fit">
            <h3 class="mb-2 d-flex justify-content-center font-bold">
                <span class="sub-title"><?= $title ?></span>
            </h3>
            <ul class="list-unstyled text-light ul-text font-1rem">
                <?php foreach ($features as $feature): ?>
                    <li>
                        <i class="fa-solid fa-check font-secondary" style="font-size: 20px;"></i>
                        <strong><?= $feature ?></strong>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}

function renderScreenshots($screenshots, $folderPath)
{
    ?>
    <section class="my-5 py-3" id="screenshots">
        <div class="container">
            <div style="display: flex; align-items: center; justify-content: center">
                <h2 class="section-title">Screenshots</h2>
            </div>
            <div class="swiper-container-wrapper position-relative">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($screenshots as $screenshot): ?>
                            <div class="swiper-slide">
                                <a data-fancybox="screenshots"
                                   href="<?= $folderPath . '/' . $screenshot ?>"
                                   data-caption="Screenshot">
                                    <img src="<?= $folderPath . '/' . $screenshot ?>"
                                         class="img-fluid rounded"
                                         style="max-height:300px; object-fit:contain; border:1px solid #444;">
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper-pagination mt-3"></div>
                <div class="swiper-button-next d-none d-md-block"></div>
                <div class="swiper-button-prev d-none d-md-block"></div>
            </div>
        </div>
    </section>
    <?php
}
