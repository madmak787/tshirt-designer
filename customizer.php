<?php
require_once 'inc/header.php';
?>
<link rel='stylesheet' href='css/jquery.colorpicker.css'>
<link rel='stylesheet' href='css/customizer.css'>
<div class="content_wrapper clearfix">
<section id="playground">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 position-relative">
                <ul class="ctd-menu" role="tablist">
                    <li>
                        <a class="nav-link active" href="#" data-bs-toggle="tab" data-bs-target="#nav-products" aria-controls="nav-products" aria-selected="true">
                            <i class="ki-duotone ki-basket">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                            <span>Products</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#nav-images" aria-controls="nav-images" aria-selected="false">
                            <i class="ki-duotone ki-update-file">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                            <span>Images</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#nav-text" aria-controls="nav-text" aria-selected="false">
                            <i class="ki-duotone ki-abstract-29">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <span>Add Text</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onClick="return deleteLayer()">
                            <i class="ki-duotone ki-trash-square">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                            <span title="Delete the selected layer">Delete Layer</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onClick="return undo();">
                            <i class="ki-duotone ki-arrow-circle-left">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <span>Undo</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onClick="return redo();">
                            <i class="ki-duotone ki-arrow-circle-right">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <span>Redo</span>
                        </a>
                    </li>
                </ul>
                <div class="ps-100px menu-wrap">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-products" role="tabpanel" aria-labelledby="nav-products-tab">
                            <?php require_once 'inc/tabs/products.php';?>
                        </div>
                        <div class="tab-pane fade" id="nav-images" role="tabpanel" aria-labelledby="nav-images-tab">
                            <?php require_once 'inc/tabs/images.php';?>
                        </div>
                        <div class="tab-pane fade" id="nav-text" role="tabpanel" aria-labelledby="nav-text-tab">
                            <?php require_once 'inc/tabs/text.php';?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <canvas class="mt-3" id="canvas" width="980" height="750"></canvas>
            </div>
        </div>
    </div>
</section>    
</div>

<?php
require_once 'inc/footer.php';
?>
<script src="js/fabric.min.js"></script>
<script src="js/jquery.colorpicker.js"></script>
<script src="js/customizer.js"></script>