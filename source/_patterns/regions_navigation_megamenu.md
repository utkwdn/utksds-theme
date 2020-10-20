---
title: "Main Navigation: Mega Menu"
layout: collection
status: development
type: Regions
scss: _content_accordion.scss
usage: "Accordion folds can be a handy way of organizing bits of content on a page."

donts: "

- Don't use folds to tuck away content you'd rather not look at. Clearer, concise writing or making hard editing choices will be a better choice.

- There is no way to direct link to a fold that is not open, so do not hide content behind a tab that you expect to be easy to find.

"
dos: "

- Pay particular attention to the role attributes and aria-controls in these examples. They make your content more accessible.

"
shortcode: "[collapsibles][collapse title=\"Collapse 1\" active=\"true\"]Collapse stuff in the first accordion fold.[/collapse]"

---


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav5" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav5">

<ul class="navbar-nav">
  <li class="nav-item  has-megamenu">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"> Mega menu  </a>
      <div class="dropdown-menu megamenu" role="menu">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="col-megamenu">
                              <h6 class="title">Title Menu One</h6>
                              <ul class="list-unstyled">
                                  <li><a href="#">Submenu item</a></li>
                                  <li><a href="#">Submenu item</a></li>
                                  <li><a href="#">Submenu item</a></li>
                                  <li><a href="#">Submenu item</a></li>
                                  <li><a href="#">Submenu item</a></li>
                                  <li><a href="#">Submenu item</a></li>
                              </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3 col-6">
                          <div class="col-megamenu">
                            <h6 class="title">Title Menu Two</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3 col-6">
                          <div class="col-megamenu">
                            <h6 class="title">Title Menu Three</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>    
                        <div class="col-md-3 col-6">
                          <div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                    </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
  </li>
  <li class="nav-item  has-megamenu"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="true">  Services </a>
    <div class="dropdown-menu megamenu" role="menu">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="col-megamenu">
                              <h6 class="title">Title Menu One</h6>
                              <ul class="list-unstyled">
                                  <li><a href="#">Submenu item</a></li>
                                  <li><a href="#">Submenu item</a></li>
                                  <li><a href="#">Submenu item</a></li>
                                  <li><a href="#">Submenu item</a></li>
                                  <li><a href="#">Submenu item</a></li>
                                  <li><a href="#">Submenu item</a></li>
                              </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3 col-6">
                          <div class="col-megamenu">
                            <h6 class="title">Title Menu Two</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3 col-6">
                          <div class="col-megamenu">
                            <h6 class="title">Title Menu Three</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>    
                        <div class="col-md-3 col-6">
                          <div class="col-megamenu">
                            <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                    <li><a href="#">Submenu item</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                    </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->



  </li>
  <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> More </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
          <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
        </ul>
    </li>
</ul>

  </div> <!-- navbar-collapse.// -->

</nav>
