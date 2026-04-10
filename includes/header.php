<?php
$currentPage = basename($_SERVER['PHP_SELF'] ?? 'index.php');
$servicePageRoutes = [
    'integrations.php',
    'system-scalability.php',
    'system-management.php',
    'product-management.php',
    'business-administration.php',
    'client-management.php',
];
$isFunctionalityPage = in_array($currentPage, $servicePageRoutes, true);
?>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg "> 

            <!-- Logo -->
            <a class="navbar-brand p-0" href="index.php">
                <img src="images/logo.svg" alt="Run a Loan">
            </a>

            <!-- Hamburger -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Left Links -->
            <ul class="navbar-nav ms-auto">

                <li class="nav-item"> <a class="nav-link <?php echo $currentPage === 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a> </li>
                <li class="nav-item"> <a class="nav-link <?php echo $currentPage === 'product-tour.php' ? 'active' : ''; ?>" href="product-tour.php">Product Tour</a> </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a 
                        class="nav-link dropdown-toggle <?php echo $isFunctionalityPage ? 'active' : ''; ?>" 
                        href="#" 
                        role="button" 
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Functionality
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?php echo $currentPage === 'integrations.php' ? 'active' : ''; ?>" href="integrations.php">Integrations</a></li>
                        <li><a class="dropdown-item <?php echo $currentPage === 'system-scalability.php' ? 'active' : ''; ?>" href="system-scalability.php">System Scalability</a></li>
                        <li><a class="dropdown-item <?php echo $currentPage === 'system-management.php' ? 'active' : ''; ?>" href="system-management.php">System Management</a></li>
                        <li><a class="dropdown-item <?php echo $currentPage === 'product-management.php' ? 'active' : ''; ?>" href="product-management.php">Product Management</a></li>
                        <li><a class="dropdown-item <?php echo $currentPage === 'business-administration.php' ? 'active' : ''; ?>" href="business-administration.php">Business Administration</a></li>
                        <li><a class="dropdown-item <?php echo $currentPage === 'client-management.php' ? 'active' : ''; ?>" href="client-management.php">Client Management</a></li>
                    </ul>
                </li>

                <li class="nav-item"> <a class="nav-link <?php echo $currentPage === 'faqs.php' ? 'active' : ''; ?>" href="faqs.php">FAQs</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Contact</a> </li>

            </ul>

            <!-- Right Button -->
            <div class="d-flex">
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
 
        </nav>
    </div>
</header>
