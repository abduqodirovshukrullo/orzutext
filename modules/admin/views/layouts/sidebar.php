<?php
/**
 * Created by PhpStorm.
 * User: Farhodjon
 * Date: 10.03.2018
 * Time: 15:17
 */

use app\modules\admin\widgets\Menu;

?>
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <?php
            try {
                echo Menu::widget([
                    'options' => [ 'id' => 'sidebarnav' ],
                    'submenuTemplate' => "\n<ul aria-expanded='false' class='collapse'>\n{items}\n</ul>\n",
                    'badgeClass' => 'label label-rouded label-primary pull-right',
                    'activateParents' => true,
                    'items' => [
                        [
                            'label' => '',
                            'options' => [ 'class' => 'nav-devider' ]
                        ],
                        [
                            'label' => 'Home',
                            'options' => [ 'class' => 'nav-label' ]
                        ],
                        [
                            'label' => 'Dashboard',
                            'url' => ['default/index'],
                            'icon' => '<i class="fa fa-tachometer"></i>',
                        ],
                        [
                            'label' => 'Website Info',
                            'url' => ['#'],
                            'icon' => '<i class="fa fa-tachometer"></i>',
                            'items'=>[
                                [
                                    'label' => 'About',
                                    'url' => ['about/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Carousel',
                                    'url' => ['carousel/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Contacts',
                                    'url' => ['contacts/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Contracts',
                                    'url' => ['contracts/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Gallery Photo',
                                    'url' => ['gallery-photo/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'History',
                                    'url' => ['history/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Mission',
                                    'url' => ['mission/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'News',
                                    'url' => ['news/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Serficate images',
                                    'url' => ['sertificate-images/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Serficate texts',
                                    'url' => ['sertificate-texts/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Vacancy',
                                    'url' => ['vacancy/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Video',
                                    'url' => ['video/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                
                            ]
                        ],
                        [
                            'label' => 'Page settings',
                            'url' => ['#'],
                            'icon' => '<i class="fa fa-tachometer"></i>',
                            'items'=>[
                                [
                                    'label' => 'Pages',
                                    'url' => ['pages/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Breadcrumbs',
                                    'url' => ['breadcrumbs/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Page texts',
                                    'url' => ['page-texts/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Our advantage',
                                    'url' => ['our-advantage/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Beleive us',
                                    'url' => ['our-partners/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Our work',
                                    'url' => ['our-work/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Partners',
                                    'url' => ['partners/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                
                            ]
                        ],
                        [
                            'label' => 'Products',
                            'url' => ['#'],
                            'icon' => '<i class="fa fa-tachometer"></i>',
                            'items'=>[
                                [
                                    'label' => 'Categories',
                                    'url' => ['categories/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Brands',
                                    'url' => ['brands/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Products',
                                    'url' => ['products/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                
                            ]
                        ],
                    ]
                ]);
            } catch ( Exception $e ) {
            }
            
            ?>
        </nav>
    </div>
</div>
