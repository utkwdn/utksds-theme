---
# You don't need to edit this file, it's empty on purpose.
# Edit theme's home layout instead if you wanna make some changes
# See: https://jekyllrb.com/docs/themes/#overriding-theme-defaults
layout: default
title: "Resources and Technical Notes"

---

<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>


## OOCSS

Where possible we use OOCSS to name classes. [You can read about the concepts in detail here.](https://www.smashingmagazine.com/2011/12/an-introduction-to-object-oriented-css-oocss/)


## Source files

In case UT slides into the Tennessee River, and all goes down. We'll have a lot of cleaning up to do, but never fear because our WordPress theme will be safe. Priorities.

All source files are stored on GitHub. And can be accessed with:

` git@github.com:UniversityOfTennessee/ut-thehill.git `

## Versions



<div class="half">
<figure class="figure">
  <img src="{{ site.baseurl }}/assets/i/screen.png" class="figure-img img-fluid" alt="Screenshot of The Hill 2015">
  <figcaption class="figure-caption">2015.</figcaption>
</figure>
</div>
<div class="half">
<figure class="figure">
  <img src="{{ site.baseurl }}/assets/i/screen2.png" class="figure-img img-fluid" alt="Screenshot of The Hill 2019">
  <figcaption class="figure-caption">2019.</figcaption>
</figure>
</div>
<br class="break">

Both versions, 2015 and 2019 are available in the same repo. There is a lot of overlap in code, and visuals. But due to technical reasons having to do with accessibility, backward-compatibility, and forward marching it became necessary to fork the two methods.

The majority of the differences are in javascript and in css.

### Bootstrap

The UT Theme takes advantage of [Bootstrap](http://getbootstrap.com). But neither the 2015 version or 2019 version uses *all* of the framework. It is mostly used to bring in components. It is not advised to use the bootstrap documentation, as it cannot be assumed it will work.

The 2015 version of The Hill uses v3. The 2019 version of The Hill uses v4.

