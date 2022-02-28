
<!-- パンくず -->

<div class="c-breadcrumb">

    <ul class="c-breadcrumb__inner" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </ul>
</div>