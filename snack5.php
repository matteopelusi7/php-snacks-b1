<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e
suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non explicabo pariatur minus quis quasi nesciunt et eum sequi! Soluta dolor blanditiis eligendi maiores totam deserunt delectus rerum architecto adipisci iusto!
    Blanditiis officia temporibus ex laudantium dignissimos. Neque, quas molestias ipsum impedit modi voluptas dolorum doloremque! Iure, recusandae omnis fuga itaque laborum deserunt provident sunt enim maiores hic fugiat, velit eum.
    Quisquam eaque saepe doloremque eius, delectus maiores aliquid commodi qui autem, fugit nemo nesciunt, natus suscipit? Commodi dolorum inventore consectetur deleniti quae repellendus ipsa enim facilis a possimus. Numquam, sunt.
    Praesentium accusantium assumenda natus molestias consectetur nihil? Nesciunt voluptas mollitia magni perspiciatis dolorem aperiam sed laudantium quod, impedit, repellendus ducimus veniam at vero quos. Sunt nisi qui quae nesciunt harum.
    Natus labore asperiores doloremque? Placeat magnam repellendus nihil rerum excepturi earum! Eius laboriosam magni fuga impedit quisquam, illo reprehenderit nulla quae deleniti nobis cum! Reprehenderit ea hic adipisci architecto sed.
    Nisi minus voluptas necessitatibus provident aspernatur eos facilis voluptatum minima accusamus laborum. Amet, molestias ea? Commodi repudiandae molestias accusantium ipsum deserunt dolor aperiam aspernatur consectetur quas illum. Sed, repudiandae consectetur.
    Corrupti, rerum possimus necessitatibus magni vitae est maxime minima in et officia sunt provident facilis? Ut ex sed animi iusto asperiores sint suscipit, autem tempora esse voluptatem? Praesentium, quo dolorem?';

$new_text = explode('.', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>

    <?php

        for ( $i = 0; $i < count($new_text); $i++ ) {
            ?>
                <p>
                    <?php echo $new_text[$i] ?>
                </p>
            <?php
        }

    ?>
    
</body>
</html>