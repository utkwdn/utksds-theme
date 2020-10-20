---
# You don't need to edit this file, it's empty on purpose.
# Edit theme's home layout instead if you wanna make some changes
# See: https://jekyllrb.com/docs/themes/#overriding-theme-defaults
layout: default
title: "Graphics"
section: accessibility

---

<p class="lead">Keep in mind that web graphics do not exist in a vacuum. They should always have a larger context and should be designed with that context in mind. They are elements of overall digital design, and as such, should never comprise the entirety of a web page or email.</p>

Any text appearing within a graphic must be accompanied by a meaningful alt-attribute and must meet [WCAG contrast guidelines](https://www.w3.org/TR/WCAG20/#visual-audio-contrast-contrast). 

#### Graphics tips

1.	Try to avoid embedding text (words) in graphics. Text that appears in graphics, if used to convey meaning, must be repeated in HTML live text along with the graphic. This repetition produces a repetitive and jarring user experience.
2.	Use a meaningful “alt” text for all graphics.
3.	Where graphics are nothing more than an “icon-like” symbol with an accompanying word, consider removing the word from the graphic and instead using HTML live text.
4.	Work with content authors, designers, and developers to provide alternatives for non-text (graphic) content.
5.	If you absolutely must embed text in an image, ensure that the color contrast for that text meets minimum contrast standards. To check contrast, refer to WebAim’s color contrast checker. 
6.	Never use orange text or backgrounds. Orange should be used as an accent color or for icons and other graphics that do not contain words.

<div class="half column">
<figure>
<img src="../../assets/i/access/Accessibility-1.gif" alt="Share Your Big Ideas"  />
<p class="text-center text-uppercase"><strong>Share your big ideas.</strong></p>
<figcaption>
<strong>Figure 1.</strong> The text in this graphic is not searchable and is not high enough contrast. To compensate for the low-contrast type, the text is repeated. This helps accessibility, but it creates a jarring and repetitive reading experience. </figcaption>
</figure>
</div>
<div class="half column">
<figure>
<img src="../../assets/i/access/Accessibility-2.gif" alt="Icon of hands sharing a light"  />
<h3 class="text-center h1 text-uppercase">Share Your<br>Big Ideas</h3>
<figcaption><strong>Figure 2.</strong>
There is no text in this graphic. The text is now html which avoids the contrast and other accessibility issues.</figcaption>
</figure>

</div>

<div class="clearfix"></div>

<br>
<div class="half column">
<figure>
<img src="../../assets/i/access/Picture1.png" alt="Icon of hands sharing a light"  />
<figcaption>
<strong>Don’t </strong> place graphics made for print in websites or emails. All text is embedded in the image and is not readable by screen readers.</figcaption>
</figure>
</div>
<div class="half column">
<figure>
<img src="../../assets/i/access/Picture2-768x651.png" alt="Icon of hands sharing a light"  />
<figcaption>
<strong>DO</strong> keep graphics simple and appropriate for the web, allowing for text content to be presented in live text.</figcaption>
</figure>

</div>

<div class="clearfix"></div>

