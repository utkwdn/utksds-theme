---
title: "Jumbotron"
layout: collection
status: development
type: Components
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

<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>