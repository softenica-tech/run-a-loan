<?php
include __DIR__ . '/service-pages.php';

$currentPage = basename($_SERVER['PHP_SELF'] ?? '');
$pageData = $servicePages[$currentPage] ?? null;
$checkIcon = 'images/services/integrations/Check.svg';

if (!$pageData) {
    http_response_code(404);
    echo 'Service page not configured.';
    return;
}

function renderServiceParagraphs(array $paragraphs): void
{
    foreach ($paragraphs as $paragraph) {
        echo '<p>' . $paragraph . '</p>';
    }
}

function renderServiceList(array $items, string $checkIcon): void
{
    $chunks = array_chunk($items, (int) ceil(count($items) / 2));

    echo '<div class="service-detail-list-grid">';
    foreach ($chunks as $listColumn) {
        echo '<ul class="service-detail-list">';
        foreach ($listColumn as $item) {
            echo '<li><img src="' . htmlspecialchars($checkIcon) . '" alt=""><span>' . htmlspecialchars($item) . '</span></li>';
        }
        echo '</ul>';
    }
    echo '</div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include __DIR__ . '/css.php'; ?>
    <title><?php echo htmlspecialchars($pageData['title']); ?></title>
</head>
<body class="service-detail-page">
    <?php include __DIR__ . '/header.php'; ?>

    <main>
        <section class="service-detail-hero" style="background-image: url('<?php echo htmlspecialchars($pageData['hero']); ?>');">
            <div class="container">
                <div class="service-detail-hero-inner">
                    <h1><?php echo htmlspecialchars($pageData['title']); ?></h1>
                </div>
            </div>
        </section>

        <section class="service-detail-content">
            <div class="container">
                <div class="service-detail-grid">
                    <div class="service-detail-main">
                        <?php foreach ($pageData['sections'] as $section): ?>
                            <?php if ($section['type'] === 'image'): ?>
                                <img src="<?php echo htmlspecialchars($section['image']); ?>" alt="<?php echo htmlspecialchars($pageData['title']); ?>" class="service-detail-image img-fluid">
                            <?php elseif ($section['type'] === 'intro'): ?>
                                <div class="service-detail-copy">
                                    <h2><?php echo htmlspecialchars($section['heading']); ?></h2>
                                    <?php renderServiceParagraphs($section['paragraphs']); ?>
                                </div>
                            <?php elseif ($section['type'] === 'text'): ?>
                                <div class="service-detail-copy service-detail-copy-compact">
                                    <h2><?php echo htmlspecialchars($section['heading']); ?></h2>
                                    <?php renderServiceParagraphs($section['paragraphs']); ?>
                                </div>
                            <?php elseif ($section['type'] === 'list-section'): ?>
                                <div class="service-detail-list-section">
                                    <h3><?php echo htmlspecialchars($section['heading']); ?></h3>
                                    <?php renderServiceList($section['items'], $checkIcon); ?>
                                </div>
                            <?php elseif ($section['type'] === 'cards'): ?>
                                <div class="service-detail-cards service-detail-cards-<?php echo (int) ($section['columns'] ?? 2); ?>">
                                    <?php foreach ($section['cards'] as $card): ?>
                                        <article class="service-detail-card<?php echo !empty($card['full']) ? ' service-detail-card-full' : ''; ?>">
                                            <div class="service-detail-card-icon">
                                                <img src="<?php echo htmlspecialchars($card['icon']); ?>" alt="" class="img-fluid">
                                            </div>
                                            <h3><?php echo htmlspecialchars($card['title']); ?></h3>
                                            <?php if (!empty($card['copy'])): ?>
                                                <p><?php echo htmlspecialchars($card['copy']); ?></p>
                                            <?php endif; ?>
                                            <?php if (!empty($card['items'])): ?>
                                                <ul class="service-detail-card-list">
                                                    <?php foreach ($card['items'] as $item): ?>
                                                        <li><?php echo htmlspecialchars($item); ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </article>
                                    <?php endforeach; ?>
                                </div>
                            <?php elseif ($section['type'] === 'split-quote'): ?>
                                <div class="service-detail-split">
                                    <div class="service-detail-copy service-detail-copy-compact">
                                        <h2><?php echo htmlspecialchars($section['heading']); ?></h2>
                                        <?php renderServiceParagraphs($section['paragraphs']); ?>
                                    </div>
                                    <aside class="service-detail-quote">
                                        <img src="images/services/client-management/Group 309.png" alt="" class="service-detail-quote-mark img-fluid">
                                        <blockquote><?php echo htmlspecialchars($section['quote']); ?></blockquote>
                                        <cite><?php echo htmlspecialchars($section['attribution']); ?></cite>
                                    </aside>
                                </div>
                            <?php elseif ($section['type'] === 'image-pair'): ?>
                                <div class="service-detail-image-pair">
                                    <?php foreach ($section['images'] as $image): ?>
                                        <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($pageData['title']); ?>" class="service-detail-image img-fluid">
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                    <aside class="service-detail-sidebar">
                        <div class="service-detail-sidebar-card">
                            <h3>More Services</h3>
                            <nav class="service-detail-sidebar-nav">
                                <?php foreach ($servicePages as $route => $service): ?>
                                    <a href="<?php echo htmlspecialchars($route); ?>" class="<?php echo $route === $currentPage ? 'active' : ''; ?>">
                                        <?php echo htmlspecialchars($service['title']); ?>
                                    </a>
                                <?php endforeach; ?>
                            </nav>
                        </div>
                    </aside>
                </div>

                <div class="service-detail-cta">
                    <div class="service-detail-cta-inner">
                        <img src="images/product-tour/Rectangle 23.png" alt="" class="service-detail-cta-bg img-fluid">
                        <div class="service-detail-cta-overlay"></div>
                        <div class="service-detail-cta-content">
                            <h2><?php echo htmlspecialchars($pageData['cta']['title']); ?></h2>
                            <p><?php echo $pageData['cta']['copy']; ?></p>
                            <a href="request-demo.php" class="btn btn-site">
                                Request a Demo
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M3.43442 0C3.12087 0 2.82015 0.124563 2.59843 0.346278C2.37672 0.567993 2.25216 0.868715 2.25216 1.18227C2.25216 1.49582 2.37672 1.79654 2.59843 2.01826C2.82015 2.23997 3.12087 2.36454 3.43442 2.36454H13.9645L0.376288 15.9528C0.260126 16.0609 0.166963 16.1916 0.102348 16.3364C0.0377332 16.4815 0.00297474 16.6382 0.000184589 16.7969C-0.00262133 16.9556 0.026588 17.1133 0.0860482 17.2605C0.145508 17.4077 0.234005 17.5414 0.346274 17.6536C0.458542 17.7659 0.592265 17.8545 0.739481 17.9139C0.886697 17.9733 1.04438 18.0026 1.20312 17.9998C1.36186 17.997 1.51842 17.9623 1.66345 17.8977C1.80847 17.833 1.939 17.7399 2.04723 17.6237L15.6355 4.03548V14.5656C15.6355 14.8791 15.76 15.1799 15.9818 15.4015C16.2034 15.6233 16.5042 15.7478 16.8177 15.7478C17.1313 15.7478 17.432 15.6233 17.6537 15.4015C17.8755 15.1799 18 14.8791 18 14.5656V1.18227C17.9992 1.02511 17.9671 0.869708 17.9054 0.725125C17.8197 0.523571 17.6802 0.349399 17.5023 0.221557C17.3244 0.0937139 17.1149 0.0170877 16.8965 0H3.43442Z" fill="#11111C"/>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/footer.php'; ?>
    <?php include __DIR__ . '/js.php'; ?>
</body>
</html>
