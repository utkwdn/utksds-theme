<?php
    $site_width = get_theme_mod( 'site_width' );
?>
  <nav id="universal-header" class="bg-smokey">
    <div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
<!--
    <a class="text-uppercase text-decoration-none text-light nav-link text-small col-12 col-lg-4 text-center text-lg-left" href="https://www.utk.edu/">
      <svg version="1.1" id="utk-powert" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 20.74 20.74" style="enable-background:new 0 0 20.74 20.74;height: 1.75rem; width: 1.75rem;margin-top: -0.25rem;" xml:space="preserve">
      <style type="text/css">
      	.st0{fill:#FF8200;}
      	.st1{fill:#FFFFFF;}
      </style>
      <polygon class="st0" points="20.74,20.74 20.74,0 0,0 0,20.74 20.74,20.74 "/>
      <path class="st1" d="M18.12,2.62v5.23h-1.94c0-0.96-0.95-1.74-2.13-1.74c-0.86,0-1.6,0.42-1.94,1.02v6.54
      	c0,1.39,1.08,2.52,2.42,2.52h0.01v1.94H6.2v-1.94h0.01c1.34,0,2.42-1.13,2.42-2.52V7.12C8.29,6.52,7.55,6.1,6.69,6.1
      	c-1.18,0-2.13,0.78-2.13,1.74H2.62V2.62H18.12L18.12,2.62z"/>
      </svg>
    University of Tennessee, Knoxville</a>
-->
    <ul class="row justify-content-between list-inline mb-0">
      <li class="col-12 col-lg-6 list-inline-item mr-auto"><small><a href="https://www.utk.edu" class="nav-link text-light text-uppercase text-center text-lg-left">The University of Tennessee, Knoxville</a></small></li>
      <li class="col-auto"><small><a href="https://giveto.utk.edu" class="nav-link px-0 text-light text-uppercase">Give</a></small></li>
      <li class="col-auto"><small><a href="https://my.utk.edu" class="nav-link px-0 text-light text-uppercase">myUTK</a></small></li>
      <li class="col-auto"><small><a href="https://apply.utk.edu" class="nav-link px-0 text-light text-uppercase">Apply</a></small></li>
      <li class="col-auto">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#searchHeader" aria-controls="searchHeader" aria-expanded="false" aria-label="Toggle search"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" role="decorative" viewBox="0 0 24 24"><path d="M23.822 20.88l-6.353-6.354c.93-1.465 1.467-3.2 1.467-5.059.001-5.219-4.247-9.467-9.468-9.467s-9.468 4.248-9.468 9.468c0 5.221 4.247 9.469 9.468 9.469 1.768 0 3.421-.487 4.839-1.333l6.396 6.396 3.119-3.12zm-20.294-11.412c0-3.273 2.665-5.938 5.939-5.938 3.275 0 5.94 2.664 5.94 5.938 0 3.275-2.665 5.939-5.94 5.939-3.274 0-5.939-2.664-5.939-5.939z"/></svg><span class="sr-only">Search</span></button>
      </li>
      <li class="col-auto">
        <button class="navbar-toggler" type="button" id="mobile-menu-open" data-toggle="site-navigation"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/></svg><span class="sr-only">Menu</span></button>
      </li>
    </ul>
    </div>
  </nav>



  <div class="collapse container<?php if ($site_width != "max-width") { ?>-fluid<?php }; ?>" id="searchHeader">
    <div class="row bg-smokey py-2">
      <div class="col-12 col-md-6">
        <form method="GET" action="//google.tennessee.edu/search" class="form-inline hidden-print">
          <div class="form-group col-12">
          <label class="sr-only" for="q">Search UT</label>
          <input type="text" class="form-control col-8 col-lg-9 col-xl-10" title="Search utk.edu" placeholder="Search utk.edu" name="q" id="q" maxlength="256" onfocus="if(this.value == 'Search utk.edu') { this.value = ''; }">
          <input type="submit" name="btnG" class="btn btn-light col-4 col-lg-3 col-xl-2" value="Search">
          <input type="hidden" name="output" value="xml_no_dtd">
          <input type="hidden" name="oe" value="UTF-8">
          <input type="hidden" name="ie" value="UTF-8">
          <input type="hidden" name="ud" value="1">
          <input type="hidden" name="site" value="Knoxville">
          <input type="hidden" name="client" value="utk_translate_docpreview_sc_frontend">
          <input type="hidden" name="entqr" value="3">
          <!--    <input type="hidden" name="sitesearch" value="utk.edu" /> -->
          <input type="hidden" name="qtype" class="searchtext" value="utk" title="search type">
          <input type="hidden" name="proxystylesheet" value="utk_translate_docpreview_sc_frontend">
          </div>
        </form>
      </div>
      <div class="col-12 col-md-6">
          <form  class="form-inline hidden-print" name="utk_seek_site" method="post" accept-charset="iso-8859-1" action="//www.utk.edu/masthead/query.php">
            <div class="form-group col-12">
              <input type="text" name="qt"  class="form-control col-8 col-lg-9 col-xl-10"   onfocus="if(this.value == 'Search <?php bloginfo( 'name' ); ?>') { this.value = ''; }" placeholder="Search <?php bloginfo( 'name' ); ?>" title="search">
              <input type="hidden" name="qtype" value="site_utk:<?php echo esc_url( home_url( '/' ) ); ?>">
              <input type="hidden" name="col" value="utk">
              <input name="go" type="submit" title="Submit" class="btn btn-light col-4 col-lg-3 col-xl-2" value="Search">
            </div>
          </form>
      </div>
    </div>
  </div>