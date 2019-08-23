<?php 
/*
Template Name: list
*/
?>

<?php get_header(); ?>


<!-- Main -->
<div id="main">

    <!-- Post -->
    <?php 
        
        if(have_posts()):
            while(have_posts()) : the_post(); ?>

    <section class="post">
        <header class="major">
            <span class="date"><?php the_time('j F Y') ?></span>
            <h1><?php the_title(); ?></h1>
            <!-- <p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
                    facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
                    amet nullam sed etiam veroeros.</p> -->
        </header>
        <div class="image main"><img src="images/pic01.jpg" alt="" /></div>
        <p><?php the_content(); ?></p>
        
        <h3>Alternate</h3>
        <div class="table-wrapper">
            <table class="alt">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Item 1</td>
                        <td>Ante turpis integer aliquet porttitor.</td>
                        <td>29.99</td>
                    </tr>
                    <tr>
                        <td>Item 2</td>
                        <td>Vis ac commodo adipiscing arcu aliquet.</td>
                        <td>19.99</td>
                    </tr>
                    <tr>
                        <td>Item 3</td>
                        <td> Morbi faucibus arcu accumsan lorem.</td>
                        <td>29.99</td>
                    </tr>
                    <tr>
                        <td>Item 4</td>
                        <td>Vitae integer tempus condimentum.</td>
                        <td>19.99</td>
                    </tr>
                    <tr>
                        <td>Item 5</td>
                        <td>Ante turpis integer aliquet porttitor.</td>
                        <td>29.99</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <td>100.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>

    <?php endwhile;

        else : echo '<p>No content found</p>';

        endif;

        ?>

</div>


<?php get_footer(); ?>