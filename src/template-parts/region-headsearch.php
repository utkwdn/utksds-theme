<?php
    $site_width = get_theme_mod( 'site_width' );
?>
  <nav id="universal-header" class="bg-smokey">
    <div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
    <ul class="row justify-content-between list-inline mb-0">
      <li class="col-12 col-md-auto list-inline-item mr-auto"><small><a href="https://www.utk.edu" class="nav-link text-light text-uppercase text-center text-lg-left">www.utk.edu</a></small></li>
      <li class="col-auto"><small><a href="https://giveto.utk.edu" class="nav-link px-0 text-light text-uppercase">Give</a></small></li>
      <li class="col-auto"><small><a href="https://my.utk.edu" class="nav-link px-0 text-light text-uppercase">myUTK</a></small></li>
      <li class="col-auto"><small><a href="https://apply.utk.edu" class="nav-link px-0 text-light text-uppercase">Apply</a></small></li>
      <li class="col-auto">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#searchHeader" aria-controls="searchHeader" aria-expanded="false" aria-label="Toggle search">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" id="searchHeader-open"><path d="M23.822 20.88l-6.353-6.354c.93-1.465 1.467-3.2 1.467-5.059.001-5.219-4.247-9.467-9.468-9.467s-9.468 4.248-9.468 9.468c0 5.221 4.247 9.469 9.468 9.469 1.768 0 3.421-.487 4.839-1.333l6.396 6.396 3.119-3.12zm-20.294-11.412c0-3.273 2.665-5.938 5.939-5.938 3.275 0 5.94 2.664 5.94 5.938 0 3.275-2.665 5.939-5.94 5.939-3.274 0-5.939-2.664-5.939-5.939z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="searchHeader-close"><path d="M23 20.168l-8.185-8.187 8.185-8.174-2.832-2.807-8.182 8.179-8.176-8.179-2.81 2.81 8.186 8.196-8.186 8.184 2.81 2.81 8.203-8.192 8.18 8.192z"/></svg>
        <span class="sr-only visually-hidden">Search</span></button>
      </li>
      <li class="col-auto">
        <button class="navbar-toggler" type="button" id="mobile-menu-open" data-toggle="#site-navigation"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/></svg><span class="sr-only">Menu</span></button>
      </li>
    </ul>
    </div>

  <div class="collapse container<?php if ($site_width != "max-width") { ?>-fluid<?php }; ?>" id="searchHeader">
    <div class="row bg-smokey py-2">
      <div class="col-12 col-md-8 offset-md-2">
        <form method="GET" action="//google.tennessee.edu/search" class="form-inline hidden-print">
          <div class="form-group col-12">
          <label class="sr-only visually-hidden" for="q">Search UT</label>
          <input type="text" class="form-control col bg-light" title="Search utk.edu" placeholder="Search utk.edu" name="q" id="q" maxlength="256" onfocus="if(this.value == 'Search utk.edu') { this.value = ''; }">
          <input type="submit" name="btnG" class="btn btn-light col-auto" value="Search">
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
    </div>
  </div>

  </nav>