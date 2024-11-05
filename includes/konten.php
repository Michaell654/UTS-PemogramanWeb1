<div class="container" id="pageContent"> <!-- Added an ID for search targeting -->
        <?php
        // Check if a specific page is requested
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            // Switch case to include the corresponding page
            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'about':
                    include "about.php";
                    break;
                case 'contact':
                    include "contact.php";
                    break;
                case 'datatables':
                    include "includes/datatables.php";
                    break;
                default:
                    include "home.php"; // Default to home if no valid page is found
                case 'form':
                    include "form.php";
                    break;
            }
        } else {
            // Default to home page if no page parameter is provided
            include "home.php";
        }
        ?>
    </div>