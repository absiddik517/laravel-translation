<style>
  /*!
 * Bootstrap v4.3.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #fff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #007bff;
  --secondary: #6c757d;
  --success: #28a745;
  --info: #17a2b8;
  --warning: #ffc107;
  --danger: #dc3545;
  --light: #f8f9fa;
  --dark: #343a40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}

body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}

[tabindex="-1"]:focus {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
  -webkit-text-decoration-skip-ink: none;
  text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
}

a:hover {
  color: #0056b3;
  text-decoration: underline;
}

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
  outline: 0;
}

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg {
  overflow: hidden;
  vertical-align: middle;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
}

label {
  display: inline-block;
  margin-bottom: 0.5rem;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

select {
  word-wrap: normal;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
  cursor: pointer;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
}

h1, .h1 {
  font-size: 2.5rem;
}

h2, .h2 {
  font-size: 2rem;
}

h3, .h3 {
  font-size: 1.75rem;
}

h4, .h4 {
  font-size: 1.5rem;
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2;
}

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

small,
.small {
  font-size: 80%;
  font-weight: 400;
}

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}

.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 90%;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d;
}

.blockquote-footer::before {
  content: "\2014\00A0";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 90%;
  color: #6c757d;
}

code {
  font-size: 87.5%;
  color: #e83e8c;
  word-break: break-word;
}

a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem;
}

kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
}

pre {
  display: block;
  font-size: 87.5%;
  color: #212529;
}

pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.no-gutters {
  margin-right: 0;
  margin-left: 0;
}

.no-gutters > .col,
.no-gutters > [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%;
}

.col-auto {
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: 100%;
}

.col-1 {
  -ms-flex: 0 0 8.333333%;
  flex: 0 0 8.333333%;
  max-width: 8.333333%;
}

.col-2 {
  -ms-flex: 0 0 16.666667%;
  flex: 0 0 16.666667%;
  max-width: 16.666667%;
}

.col-3 {
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  -ms-flex: 0 0 33.333333%;
  flex: 0 0 33.333333%;
  max-width: 33.333333%;
}

.col-5 {
  -ms-flex: 0 0 41.666667%;
  flex: 0 0 41.666667%;
  max-width: 41.666667%;
}

.col-6 {
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  -ms-flex: 0 0 58.333333%;
  flex: 0 0 58.333333%;
  max-width: 58.333333%;
}

.col-8 {
  -ms-flex: 0 0 66.666667%;
  flex: 0 0 66.666667%;
  max-width: 66.666667%;
}

.col-9 {
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  -ms-flex: 0 0 83.333333%;
  flex: 0 0 83.333333%;
  max-width: 83.333333%;
}

.col-11 {
  -ms-flex: 0 0 91.666667%;
  flex: 0 0 91.666667%;
  max-width: 91.666667%;
}

.col-12 {
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}

.order-first {
  -ms-flex-order: -1;
  order: -1;
}

.order-last {
  -ms-flex-order: 13;
  order: 13;
}

.order-0 {
  -ms-flex-order: 0;
  order: 0;
}

.order-1 {
  -ms-flex-order: 1;
  order: 1;
}

.order-2 {
  -ms-flex-order: 2;
  order: 2;
}

.order-3 {
  -ms-flex-order: 3;
  order: 3;
}

.order-4 {
  -ms-flex-order: 4;
  order: 4;
}

.order-5 {
  -ms-flex-order: 5;
  order: 5;
}

.order-6 {
  -ms-flex-order: 6;
  order: 6;
}

.order-7 {
  -ms-flex-order: 7;
  order: 7;
}

.order-8 {
  -ms-flex-order: 8;
  order: 8;
}

.order-9 {
  -ms-flex-order: 9;
  order: 9;
}

.order-10 {
  -ms-flex-order: 10;
  order: 10;
}

.order-11 {
  -ms-flex-order: 11;
  order: 11;
}

.order-12 {
  -ms-flex-order: 12;
  order: 12;
}

.offset-1 {
  margin-left: 8.333333%;
}

.offset-2 {
  margin-left: 16.666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.333333%;
}

.offset-5 {
  margin-left: 41.666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.333333%;
}

.offset-8 {
  margin-left: 66.666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.333333%;
}

.offset-11 {
  margin-left: 91.666667%;
}

@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-sm-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-sm-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-sm-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-sm-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-sm-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-sm-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-sm-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-sm-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-sm-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-sm-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-sm-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-sm-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-sm-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-sm-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-sm-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-sm-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-sm-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-sm-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-sm-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-sm-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-sm-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-sm-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-sm-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-sm-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.333333%;
  }
  .offset-sm-2 {
    margin-left: 16.666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.333333%;
  }
  .offset-sm-5 {
    margin-left: 41.666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.333333%;
  }
  .offset-sm-8 {
    margin-left: 66.666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.333333%;
  }
  .offset-sm-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-md-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-md-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-md-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-md-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-md-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-md-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-md-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-md-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-md-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-md-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-md-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-md-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-md-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-md-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-md-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-md-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-md-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-md-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-md-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-md-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-md-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-md-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-md-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-md-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-md-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-md-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.333333%;
  }
  .offset-md-2 {
    margin-left: 16.666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.333333%;
  }
  .offset-md-5 {
    margin-left: 41.666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.333333%;
  }
  .offset-md-8 {
    margin-left: 66.666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.333333%;
  }
  .offset-md-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-lg-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-lg-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-lg-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-lg-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-lg-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-lg-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-lg-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-lg-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-lg-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-lg-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-lg-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-lg-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-lg-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-lg-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-lg-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-lg-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-lg-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-lg-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-lg-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-lg-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-lg-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-lg-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-lg-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-lg-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-lg-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-lg-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-lg-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.333333%;
  }
  .offset-lg-2 {
    margin-left: 16.666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.333333%;
  }
  .offset-lg-5 {
    margin-left: 41.666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.333333%;
  }
  .offset-lg-8 {
    margin-left: 66.666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.333333%;
  }
  .offset-lg-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-xl-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-xl-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-xl-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-xl-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xl-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-xl-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-xl-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xl-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-xl-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-xl-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xl-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-xl-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-xl-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xl-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-xl-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-xl-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-xl-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-xl-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-xl-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-xl-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-xl-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-xl-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-xl-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-xl-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-xl-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-xl-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-xl-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-xl-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.333333%;
  }
  .offset-xl-2 {
    margin-left: 16.666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.333333%;
  }
  .offset-xl-5 {
    margin-left: 41.666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.333333%;
  }
  .offset-xl-8 {
    margin-left: 66.666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.333333%;
  }
  .offset-xl-11 {
    margin-left: 91.666667%;
  }
}

.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
}

.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}

.table tbody + tbody {
  border-top: 2px solid #dee2e6;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid #dee2e6;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
  color: #212529;
  background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #b8daff;
}

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
  border-color: #7abaff;
}

.table-hover .table-primary:hover {
  background-color: #9fcdff;
}

.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #9fcdff;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d6d8db;
}

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
  border-color: #b3b7bb;
}

.table-hover .table-secondary:hover {
  background-color: #c8cbcf;
}

.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #c8cbcf;
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c3e6cb;
}

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
  border-color: #8fd19e;
}

.table-hover .table-success:hover {
  background-color: #b1dfbb;
}

.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #b1dfbb;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #bee5eb;
}

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
  border-color: #86cfda;
}

.table-hover .table-info:hover {
  background-color: #abdde5;
}

.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #abdde5;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffeeba;
}

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
  border-color: #ffdf7e;
}

.table-hover .table-warning:hover {
  background-color: #ffe8a1;
}

.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #ffe8a1;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f5c6cb;
}

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
  border-color: #ed969e;
}

.table-hover .table-danger:hover {
  background-color: #f1b0b7;
}

.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #f1b0b7;
}

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe;
}

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
  border-color: #fbfcfc;
}

.table-hover .table-light:hover {
  background-color: #ececf6;
}

.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c8ca;
}

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
  border-color: #95999c;
}

.table-hover .table-dark:hover {
  background-color: #b9bbbe;
}

.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #b9bbbe;
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
  color: #fff;
  background-color: #343a40;
  border-color: #454d55;
}

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.table-dark {
  color: #fff;
  background-color: #343a40;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #454d55;
}

.table-dark.table-bordered {
  border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

.table-responsive > .table-bordered {
  border: 0;
}

.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.form-control::-webkit-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::-moz-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  margin-bottom: 0;
  line-height: 1.5;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.form-control-lg {
  height: calc(1.5em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

select.form-control[size], select.form-control[multiple] {
  height: auto;
}

textarea.form-control {
  height: auto;
}

.form-group {
  margin-bottom: 1rem;
}

.form-text {
  display: block;
  margin-top: 0.25rem;
}

.form-row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}

.form-row > .col,
.form-row > [class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}

.form-check-input:disabled ~ .form-check-label {
  color: #6c757d;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: -ms-inline-flexbox;
  display: inline-flex;
  -ms-flex-align: center;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #28a745;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(40, 167, 69, 0.9);
  border-radius: 0.25rem;
}

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #28a745;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: center right calc(0.375em + 0.1875rem);
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .form-control:valid ~ .valid-feedback,
.was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
.form-control.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:valid, .custom-select.is-valid {
  border-color: #28a745;
  padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .custom-select:valid ~ .valid-feedback,
.was-validated .custom-select:valid ~ .valid-tooltip, .custom-select.is-valid ~ .valid-feedback,
.custom-select.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control-file:valid ~ .valid-feedback,
.was-validated .form-control-file:valid ~ .valid-tooltip, .form-control-file.is-valid ~ .valid-feedback,
.form-control-file.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #28a745;
}

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #28a745;
}

.was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
  border-color: #28a745;
}

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  border-color: #34ce57;
  background-color: #34ce57;
}

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #28a745;
}

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #28a745;
}

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #dc3545;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #dc3545;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
  background-repeat: no-repeat;
  background-position: center right calc(0.375em + 0.1875rem);
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-control:invalid ~ .invalid-feedback,
.was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
.form-control.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:invalid, .custom-select.is-invalid {
  border-color: #dc3545;
  padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .custom-select:invalid ~ .invalid-feedback,
.was-validated .custom-select:invalid ~ .invalid-tooltip, .custom-select.is-invalid ~ .invalid-feedback,
.custom-select.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control-file:invalid ~ .invalid-feedback,
.was-validated .form-control-file:invalid ~ .invalid-tooltip, .form-control-file.is-invalid ~ .invalid-feedback,
.form-control-file.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #dc3545;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
  border-color: #dc3545;
}

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  border-color: #e4606d;
  background-color: #e4606d;
}

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.form-inline {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -ms-flex-align: center;
  align-items: center;
}

.form-inline .form-check {
  width: 100%;
}

@media (min-width: 576px) {
  .form-inline label {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-bottom: 0;
  }
  .form-inline .form-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 0;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-plaintext {
    display: inline-block;
  }
  .form-inline .input-group,
  .form-inline .custom-select {
    width: auto;
  }
  .form-inline .form-check {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: auto;
    padding-left: 0;
  }
  .form-inline .form-check-input {
    position: relative;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }
  .form-inline .custom-control {
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
  }
  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}

.btn {
  display: inline-block;
  font-weight: 400;
  color: #212529;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}

.btn:hover {
  color: #212529;
  text-decoration: none;
}

.btn:focus, .btn.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.btn.disabled, .btn:disabled {
  opacity: 0.65;
}

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none;
}

.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-primary:focus, .btn-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #0062cc;
  border-color: #005cbf;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.btn-secondary {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:hover {
  color: #fff;
  background-color: #5a6268;
  border-color: #545b62;
}

.btn-secondary:focus, .btn-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
}

.btn-secondary.disabled, .btn-secondary:disabled {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #545b62;
  border-color: #4e555b;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
}

.btn-success {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-success:hover {
  color: #fff;
  background-color: #218838;
  border-color: #1e7e34;
}

.btn-success:focus, .btn-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
}

.btn-success.disabled, .btn-success:disabled {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
.show > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #1e7e34;
  border-color: #1c7430;
}

.btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
}

.btn-info {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-info:hover {
  color: #fff;
  background-color: #138496;
  border-color: #117a8b;
}

.btn-info:focus, .btn-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
}

.btn-info.disabled, .btn-info:disabled {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
.show > .btn-info.dropdown-toggle {
  color: #fff;
  background-color: #117a8b;
  border-color: #10707f;
}

.btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
}

.btn-warning {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-warning:hover {
  color: #212529;
  background-color: #e0a800;
  border-color: #d39e00;
}

.btn-warning:focus, .btn-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
}

.btn-warning.disabled, .btn-warning:disabled {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
.show > .btn-warning.dropdown-toggle {
  color: #212529;
  background-color: #d39e00;
  border-color: #c69500;
}

.btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
}

.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:hover {
  color: #fff;
  background-color: #c82333;
  border-color: #bd2130;
}

.btn-danger:focus, .btn-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
}

.btn-danger.disabled, .btn-danger:disabled {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
.show > .btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #bd2130;
  border-color: #b21f2d;
}

.btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
}

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:hover {
  color: #212529;
  background-color: #e2e6ea;
  border-color: #dae0e5;
}

.btn-light:focus, .btn-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
}

.btn-light.disabled, .btn-light:disabled {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
.show > .btn-light.dropdown-toggle {
  color: #212529;
  background-color: #dae0e5;
  border-color: #d3d9df;
}

.btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
}

.btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:hover {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
}

.btn-dark:focus, .btn-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
}

.btn-dark.disabled, .btn-dark:disabled {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
.show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #1d2124;
  border-color: #171a1d;
}

.btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
}

.btn-outline-primary {
  color: #007bff;
  border-color: #007bff;
}

.btn-outline-primary:hover {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-outline-primary:focus, .btn-outline-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: #007bff;
  background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-outline-secondary {
  color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:hover {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:focus, .btn-outline-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
  color: #6c757d;
  background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
.show > .btn-outline-secondary.dropdown-toggle {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-outline-success {
  color: #28a745;
  border-color: #28a745;
}

.btn-outline-success:hover {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-outline-success:focus, .btn-outline-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.btn-outline-success.disabled, .btn-outline-success:disabled {
  color: #28a745;
  background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
.show > .btn-outline-success.dropdown-toggle {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.btn-outline-info {
  color: #17a2b8;
  border-color: #17a2b8;
}

.btn-outline-info:hover {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-outline-info:focus, .btn-outline-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.btn-outline-info.disabled, .btn-outline-info:disabled {
  color: #17a2b8;
  background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
.show > .btn-outline-info.dropdown-toggle {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.btn-outline-warning {
  color: #ffc107;
  border-color: #ffc107;
}

.btn-outline-warning:hover {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-outline-warning:focus, .btn-outline-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.btn-outline-warning.disabled, .btn-outline-warning:disabled {
  color: #ffc107;
  background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
.show > .btn-outline-warning.dropdown-toggle {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.btn-outline-danger {
  color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:hover {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:focus, .btn-outline-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.btn-outline-danger.disabled, .btn-outline-danger:disabled {
  color: #dc3545;
  background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
.show > .btn-outline-danger.dropdown-toggle {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.btn-outline-light {
  color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:hover {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:focus, .btn-outline-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-light.disabled, .btn-outline-light:disabled {
  color: #f8f9fa;
  background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
.show > .btn-outline-light.dropdown-toggle {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-dark {
  color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:hover {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:focus, .btn-outline-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-outline-dark.disabled, .btn-outline-dark:disabled {
  color: #343a40;
  background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
.show > .btn-outline-dark.dropdown-toggle {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-link {
  font-weight: 400;
  color: #007bff;
  text-decoration: none;
}

.btn-link:hover {
  color: #0056b3;
  text-decoration: underline;
}

.btn-link:focus, .btn-link.focus {
  text-decoration: underline;
  box-shadow: none;
}

.btn-link:disabled, .btn-link.disabled {
  color: #6c757d;
  pointer-events: none;
}

.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.btn-block {
  display: block;
  width: 100%;
}

.btn-block + .btn-block {
  margin-top: 0.5rem;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}

.fade {
  transition: opacity 0.15s linear;
}

@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}

.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}

@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}

.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}

.dropdown-menu-left {
  right: auto;
  left: 0;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 768px) {
  .dropdown-menu-md-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 992px) {
  .dropdown-menu-lg-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 1200px) {
  .dropdown-menu-xl-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-right {
    right: 0;
    left: auto;
  }
}

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-toggle::after {
  vertical-align: 0;
}

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}

.dropleft .dropdown-toggle::after {
  display: none;
}

.dropleft .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover, .dropdown-item:focus {
  color: #16181b;
  text-decoration: none;
  background-color: #f8f9fa;
}

.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #007bff;
}

.dropdown-item.disabled, .dropdown-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6c757d;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #212529;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle;
}

.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
}

.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover {
  z-index: 1;
}

.btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-toolbar {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: start;
  justify-content: flex-start;
}

.btn-toolbar .input-group {
  width: auto;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem;
}

.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}

.btn-group-vertical {
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-pack: center;
  justify-content: center;
}

.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  width: 100%;
}

.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}

.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0;
}

.btn-group-toggle > .btn input[type="radio"],
.btn-group-toggle > .btn input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"],
.btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.input-group {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%;
}

.input-group > .form-control,
.input-group > .form-control-plaintext,
.input-group > .custom-select,
.input-group > .custom-file {
  position: relative;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  width: 1%;
  margin-bottom: 0;
}

.input-group > .form-control + .form-control,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .custom-file,
.input-group > .form-control-plaintext + .form-control,
.input-group > .form-control-plaintext + .custom-select,
.input-group > .form-control-plaintext + .custom-file,
.input-group > .custom-select + .form-control,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .custom-file,
.input-group > .custom-file + .form-control,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .custom-file {
  margin-left: -1px;
}

.input-group > .form-control:focus,
.input-group > .custom-select:focus,
.input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
  z-index: 3;
}

.input-group > .custom-file .custom-file-input:focus {
  z-index: 4;
}

.input-group > .form-control:not(:last-child),
.input-group > .custom-select:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .form-control:not(:first-child),
.input-group > .custom-select:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group > .custom-file {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
}

.input-group > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .custom-file:not(:first-child) .custom-file-label {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
  display: -ms-flexbox;
  display: flex;
}

.input-group-prepend .btn,
.input-group-append .btn {
  position: relative;
  z-index: 2;
}

.input-group-prepend .btn:focus,
.input-group-append .btn:focus {
  z-index: 3;
}

.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .input-group-text,
.input-group-append .input-group-text + .btn {
  margin-left: -1px;
}

.input-group-prepend {
  margin-right: -1px;
}

.input-group-append {
  margin-left: -1px;
}

.input-group-text {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
  margin-top: 0;
}

.input-group-lg > .form-control:not(textarea),
.input-group-lg > .custom-select {
  height: calc(1.5em + 1rem + 2px);
}

.input-group-lg > .form-control,
.input-group-lg > .custom-select,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.input-group-sm > .form-control:not(textarea),
.input-group-sm > .custom-select {
  height: calc(1.5em + 0.5rem + 2px);
}

.input-group-sm > .form-control,
.input-group-sm > .custom-select,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
  padding-right: 1.75rem;
}

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem;
}

.custom-control-inline {
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-right: 1rem;
}

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}

.custom-control-input:checked ~ .custom-control-label::before {
  color: #fff;
  border-color: #007bff;
  background-color: #007bff;
}

.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #80bdff;
}

.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
  color: #fff;
  background-color: #b3d7ff;
  border-color: #b3d7ff;
}

.custom-control-input:disabled ~ .custom-control-label {
  color: #6c757d;
}

.custom-control-input:disabled ~ .custom-control-label::before {
  background-color: #e9ecef;
}

.custom-control-label {
  position: relative;
  margin-bottom: 0;
  vertical-align: top;
}

.custom-control-label::before {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  background-color: #fff;
  border: #adb5bd solid 1px;
}

.custom-control-label::after {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  content: "";
  background: no-repeat 50% / 50% 50%;
}

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #007bff;
  background-color: #007bff;
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-radio .custom-control-label::before {
  border-radius: 50%;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-switch {
  padding-left: 2.25rem;
}

.custom-switch .custom-control-label::before {
  left: -2.25rem;
  width: 1.75rem;
  pointer-events: all;
  border-radius: 0.5rem;
}

.custom-switch .custom-control-label::after {
  top: calc(0.25rem + 2px);
  left: calc(-2.25rem + 2px);
  width: calc(1rem - 4px);
  height: calc(1rem - 4px);
  background-color: #adb5bd;
  border-radius: 0.5rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out;
  transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .custom-switch .custom-control-label::after {
    transition: none;
  }
}

.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
  background-color: #fff;
  -webkit-transform: translateX(0.75rem);
  transform: translateX(0.75rem);
}

.custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.custom-select:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-select:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}

.custom-select[multiple], .custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 0.75rem;
  background-image: none;
}

.custom-select:disabled {
  color: #6c757d;
  background-color: #e9ecef;
}

.custom-select::-ms-expand {
  display: none;
}

.custom-select-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.875rem;
}

.custom-select-lg {
  height: calc(1.5em + 1rem + 2px);
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.25rem;
}

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin-bottom: 0;
}

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin: 0;
  opacity: 0;
}

.custom-file-input:focus ~ .custom-file-label {
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-file-input:disabled ~ .custom-file-label {
  background-color: #e9ecef;
}

.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Browse";
}

.custom-file-input ~ .custom-file-label[data-browse]::after {
  content: attr(data-browse);
}

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: calc(1.5em + 0.75rem);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  content: "Browse";
  background-color: #e9ecef;
  border-left: inherit;
  border-radius: 0 0.25rem 0.25rem 0;
}

.custom-range {
  width: 100%;
  height: calc(1rem + 0.4rem);
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.custom-range:focus {
  outline: none;
}

.custom-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range:focus::-ms-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range::-moz-focus-outer {
  border: 0;
}

.custom-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-webkit-slider-thumb {
    transition: none;
  }
}

.custom-range::-webkit-slider-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -moz-appearance: none;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-moz-range-thumb {
    transition: none;
  }
}

.custom-range::-moz-range-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-ms-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: 0;
  margin-right: 0.2rem;
  margin-left: 0.2rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-ms-thumb {
    transition: none;
  }
}

.custom-range::-ms-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-ms-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: transparent;
  border-color: transparent;
  border-width: 0.5rem;
}

.custom-range::-ms-fill-lower {
  background-color: #dee2e6;
  border-radius: 1rem;
}

.custom-range::-ms-fill-upper {
  margin-right: 15px;
  background-color: #dee2e6;
  border-radius: 1rem;
}

.custom-range:disabled::-webkit-slider-thumb {
  background-color: #adb5bd;
}

.custom-range:disabled::-webkit-slider-runnable-track {
  cursor: default;
}

.custom-range:disabled::-moz-range-thumb {
  background-color: #adb5bd;
}

.custom-range:disabled::-moz-range-track {
  cursor: default;
}

.custom-range:disabled::-ms-thumb {
  background-color: #adb5bd;
}

.custom-control-label::before,
.custom-file-label,
.custom-select {
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .custom-control-label::before,
  .custom-file-label,
  .custom-select {
    transition: none;
  }
}

.nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
}

.nav-link:hover, .nav-link:focus {
  text-decoration: none;
}

.nav-link.disabled {
  color: #6c757d;
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  border-bottom: 1px solid #dee2e6;
}

.nav-tabs .nav-item {
  margin-bottom: -1px;
}

.nav-tabs .nav-link {
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #e9ecef #e9ecef #dee2e6;
}

.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #495057;
  background-color: #fff;
  border-color: #dee2e6 #dee2e6 #fff;
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  border-radius: 0.25rem;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #007bff;
}

.nav-fill .nav-item {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -ms-flex-positive: 1;
  flex-grow: 1;
  text-align: center;
}

.tab-content > .tab-pane {
  display: none;
}

.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 0.5rem 1rem;
}

.navbar > .container,
.navbar > .container-fluid {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap;
}

.navbar-brand:hover, .navbar-brand:focus {
  text-decoration: none;
}

.navbar-nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}

.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -ms-flex-align: center;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.navbar-toggler:hover, .navbar-toggler:focus {
  text-decoration: none;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%;
}

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-sm .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
}

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-md .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
}

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-lg .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
}

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 1200px) {
  .navbar-expand-xl {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-xl .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
}

.navbar-expand {
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -ms-flex-pack: start;
  justify-content: flex-start;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid {
  padding-right: 0;
  padding-left: 0;
}

.navbar-expand .navbar-nav {
  -ms-flex-direction: row;
  flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid {
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
}

.navbar-expand .navbar-collapse {
  display: -ms-flexbox !important;
  display: flex !important;
  -ms-flex-preferred-size: auto;
  flex-basis: auto;
}

.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #fff;
}

.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-text a {
  color: #fff;
}

.navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
  color: #fff;
}

.card {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}

.card > hr {
  margin-right: 0;
  margin-left: 0;
}

.card > .list-group:first-child .list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.card > .list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.card-body {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1.25rem;
}

.card-title {
  margin-bottom: 0.75rem;
}

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}

.card-link + .card-link {
  margin-left: 1.25rem;
}

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}

.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-header + .list-group .list-group-item:first-child {
  border-top: 0;
}

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}

.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
}

.card-img {
  width: 100%;
  border-radius: calc(0.25rem - 1px);
}

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-deck {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}

.card-deck .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-deck {
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
  .card-deck .card {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-right: 15px;
    margin-bottom: 0;
    margin-left: 15px;
  }
}

.card-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}

.card-group > .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-group {
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
  }
  .card-group > .card {
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
  .card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
  .card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
  .card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
  .card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.card-columns .card {
  margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 1.25rem;
    -moz-column-gap: 1.25rem;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}

.accordion > .card {
  overflow: hidden;
}

.accordion > .card:not(:first-of-type) .card-header:first-child {
  border-radius: 0;
}

.accordion > .card:not(:first-of-type):not(:last-of-type) {
  border-bottom: 0;
  border-radius: 0;
}

.accordion > .card:first-of-type {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.accordion > .card:last-of-type {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.accordion > .card .card-header {
  margin-bottom: -1px;
}

.breadcrumb {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}

.breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.5rem;
  color: #6c757d;
  content: "/";
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline;
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none;
}

.breadcrumb-item.active {
  color: #6c757d;
}

.pagination {
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #007bff;
  background-color: #fff;
  border: 1px solid #dee2e6;
}

.page-link:hover {
  z-index: 2;
  color: #0056b3;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.page-link:focus {
  z-index: 2;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.page-item.active .page-link {
  z-index: 1;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .badge {
    transition: none;
  }
}

a.badge:hover, a.badge:focus {
  text-decoration: none;
}

.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem;
}

.badge-primary {
  color: #fff;
  background-color: #007bff;
}

a.badge-primary:hover, a.badge-primary:focus {
  color: #fff;
  background-color: #0062cc;
}

a.badge-primary:focus, a.badge-primary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.badge-secondary {
  color: #fff;
  background-color: #6c757d;
}

a.badge-secondary:hover, a.badge-secondary:focus {
  color: #fff;
  background-color: #545b62;
}

a.badge-secondary:focus, a.badge-secondary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.badge-success {
  color: #fff;
  background-color: #28a745;
}

a.badge-success:hover, a.badge-success:focus {
  color: #fff;
  background-color: #1e7e34;
}

a.badge-success:focus, a.badge-success.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.badge-info {
  color: #fff;
  background-color: #17a2b8;
}

a.badge-info:hover, a.badge-info:focus {
  color: #fff;
  background-color: #117a8b;
}

a.badge-info:focus, a.badge-info.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.badge-warning {
  color: #212529;
  background-color: #ffc107;
}

a.badge-warning:hover, a.badge-warning:focus {
  color: #212529;
  background-color: #d39e00;
}

a.badge-warning:focus, a.badge-warning.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.badge-danger {
  color: #fff;
  background-color: #dc3545;
}

a.badge-danger:hover, a.badge-danger:focus {
  color: #fff;
  background-color: #bd2130;
}

a.badge-danger:focus, a.badge-danger.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.badge-light {
  color: #212529;
  background-color: #f8f9fa;
}

a.badge-light:hover, a.badge-light:focus {
  color: #212529;
  background-color: #dae0e5;
}

a.badge-light:focus, a.badge-light.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.badge-dark {
  color: #fff;
  background-color: #343a40;
}

a.badge-dark:hover, a.badge-dark:focus {
  color: #fff;
  background-color: #1d2124;
}

a.badge-dark:focus, a.badge-dark.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem;
}

@media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
}

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
}

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 4rem;
}

.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 0.75rem 1.25rem;
  color: inherit;
}

.alert-primary {
  color: #004085;
  background-color: #cce5ff;
  border-color: #b8daff;
}

.alert-primary hr {
  border-top-color: #9fcdff;
}

.alert-primary .alert-link {
  color: #002752;
}

.alert-secondary {
  color: #383d41;
  background-color: #e2e3e5;
  border-color: #d6d8db;
}

.alert-secondary hr {
  border-top-color: #c8cbcf;
}

.alert-secondary .alert-link {
  color: #202326;
}

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
}

.alert-success hr {
  border-top-color: #b1dfbb;
}

.alert-success .alert-link {
  color: #0b2e13;
}

.alert-info {
  color: #0c5460;
  background-color: #d1ecf1;
  border-color: #bee5eb;
}

.alert-info hr {
  border-top-color: #abdde5;
}

.alert-info .alert-link {
  color: #062c33;
}

.alert-warning {
  color: #856404;
  background-color: #fff3cd;
  border-color: #ffeeba;
}

.alert-warning hr {
  border-top-color: #ffe8a1;
}

.alert-warning .alert-link {
  color: #533f03;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}

.alert-danger hr {
  border-top-color: #f1b0b7;
}

.alert-danger .alert-link {
  color: #491217;
}

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe;
}

.alert-light hr {
  border-top-color: #ececf6;
}

.alert-light .alert-link {
  color: #686868;
}

.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca;
}

.alert-dark hr {
  border-top-color: #b9bbbe;
}

.alert-dark .alert-link {
  color: #040505;
}

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

.progress {
  display: -ms-flexbox;
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.progress-bar {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #007bff;
  transition: width 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  -webkit-animation: progress-bar-stripes 1s linear infinite;
  animation: progress-bar-stripes 1s linear infinite;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    -webkit-animation: none;
    animation: none;
  }
}

.media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
}

.media-body {
  -ms-flex: 1;
  flex: 1;
}

.list-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}

.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}

.list-group-item-action:active {
  color: #212529;
  background-color: #e9ecef;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.list-group-item.disabled, .list-group-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: #fff;
}

.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.list-group-horizontal {
  -ms-flex-direction: row;
  flex-direction: row;
}

.list-group-horizontal .list-group-item {
  margin-right: -1px;
  margin-bottom: 0;
}

.list-group-horizontal .list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
  border-top-right-radius: 0;
}

.list-group-horizontal .list-group-item:last-child {
  margin-right: 0;
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0;
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-sm .list-group-item {
    margin-right: -1px;
    margin-bottom: 0;
  }
  .list-group-horizontal-sm .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm .list-group-item:last-child {
    margin-right: 0;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
}

@media (min-width: 768px) {
  .list-group-horizontal-md {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-md .list-group-item {
    margin-right: -1px;
    margin-bottom: 0;
  }
  .list-group-horizontal-md .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md .list-group-item:last-child {
    margin-right: 0;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
}

@media (min-width: 992px) {
  .list-group-horizontal-lg {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-lg .list-group-item {
    margin-right: -1px;
    margin-bottom: 0;
  }
  .list-group-horizontal-lg .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg .list-group-item:last-child {
    margin-right: 0;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
}

@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-xl .list-group-item {
    margin-right: -1px;
    margin-bottom: 0;
  }
  .list-group-horizontal-xl .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl .list-group-item:last-child {
    margin-right: 0;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
}

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}

.list-group-flush .list-group-item:last-child {
  margin-bottom: -1px;
}

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0;
}

.list-group-flush:last-child .list-group-item:last-child {
  margin-bottom: 0;
  border-bottom: 0;
}

.list-group-item-primary {
  color: #004085;
  background-color: #b8daff;
}

.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #004085;
  background-color: #9fcdff;
}

.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #004085;
  border-color: #004085;
}

.list-group-item-secondary {
  color: #383d41;
  background-color: #d6d8db;
}

.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #383d41;
  background-color: #c8cbcf;
}

.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #383d41;
  border-color: #383d41;
}

.list-group-item-success {
  color: #155724;
  background-color: #c3e6cb;
}

.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #155724;
  background-color: #b1dfbb;
}

.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #155724;
  border-color: #155724;
}

.list-group-item-info {
  color: #0c5460;
  background-color: #bee5eb;
}

.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #0c5460;
  background-color: #abdde5;
}

.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #0c5460;
  border-color: #0c5460;
}

.list-group-item-warning {
  color: #856404;
  background-color: #ffeeba;
}

.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #856404;
  background-color: #ffe8a1;
}

.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #856404;
  border-color: #856404;
}

.list-group-item-danger {
  color: #721c24;
  background-color: #f5c6cb;
}

.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #721c24;
  background-color: #f1b0b7;
}

.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #721c24;
  border-color: #721c24;
}

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe;
}

.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #818182;
  background-color: #ececf6;
}

.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #818182;
  border-color: #818182;
}

.list-group-item-dark {
  color: #1b1e21;
  background-color: #c6c8ca;
}

.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #1b1e21;
  background-color: #b9bbbe;
}

.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #1b1e21;
  border-color: #1b1e21;
}

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5;
}

.close:hover {
  color: #000;
  text-decoration: none;
}

.close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
  opacity: .75;
}

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

a.close.disabled {
  pointer-events: none;
}

.toast {
  max-width: 350px;
  overflow: hidden;
  font-size: 0.875rem;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
  -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(10px);
  opacity: 0;
  border-radius: 0.25rem;
}

.toast:not(:last-child) {
  margin-bottom: 0.75rem;
}

.toast.showing {
  opacity: 1;
}

.toast.show {
  display: block;
  opacity: 1;
}

.toast.hide {
  display: none;
}

.toast-header {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.25rem 0.75rem;
  color: #6c757d;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.toast-body {
  padding: 0.75rem;
}

.modal-open {
  overflow: hidden;
}

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}

.modal.fade .modal-dialog {
  transition: -webkit-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
  -webkit-transform: translate(0, -50px);
  transform: translate(0, -50px);
}

@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}

.modal.show .modal-dialog {
  -webkit-transform: none;
  transform: none;
}

.modal-dialog-scrollable {
  display: -ms-flexbox;
  display: flex;
  max-height: calc(100% - 1rem);
}

.modal-dialog-scrollable .modal-content {
  max-height: calc(100vh - 1rem);
  overflow: hidden;
}

.modal-dialog-scrollable .modal-header,
.modal-dialog-scrollable .modal-footer {
  -ms-flex-negative: 0;
  flex-shrink: 0;
}

.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - 1rem);
}

.modal-dialog-centered::before {
  display: block;
  height: calc(100vh - 1rem);
  content: "";
}

.modal-dialog-centered.modal-dialog-scrollable {
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  height: 100%;
}

.modal-dialog-centered.modal-dialog-scrollable .modal-content {
  max-height: none;
}

.modal-dialog-centered.modal-dialog-scrollable::before {
  content: none;
}

.modal-content {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.5;
}

.modal-header {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem;
}

.modal-header .close {
  padding: 1rem 1rem;
  margin: -1rem -1rem -1rem auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem;
}

.modal-footer {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #dee2e6;
  border-bottom-right-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.modal-footer > :not(:first-child) {
  margin-left: .25rem;
}

.modal-footer > :not(:last-child) {
  margin-right: .25rem;
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }
  .modal-dialog-scrollable {
    max-height: calc(100% - 3.5rem);
  }
  .modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 3.5rem);
  }
  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem);
  }
  .modal-dialog-centered::before {
    height: calc(100vh - 3.5rem);
  }
  .modal-sm {
    max-width: 300px;
  }
}

@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 800px;
  }
}

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px;
  }
}

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0;
}

.tooltip.show {
  opacity: 0.9;
}

.tooltip .arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}

.tooltip .arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0;
}

.bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
  bottom: 0;
}

.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
  top: 0;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem;
}

.bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
  right: 0;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0;
}

.bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
  top: 0;
}

.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  bottom: 0;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem;
}

.bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
  left: 0;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}

.popover .arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
  margin: 0 0.3rem;
}

.popover .arrow::before, .popover .arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem;
}

.bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
  bottom: calc((0.5rem + 1px) * -1);
}

.bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
  bottom: 0;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
  bottom: 1px;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: #fff;
}

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem;
}

.bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
  left: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
  left: 0;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
  left: 1px;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: #fff;
}

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem;
}

.bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
  top: calc((0.5rem + 1px) * -1);
}

.bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
  top: 0;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
  top: 1px;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: #fff;
}

.bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem;
}

.bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
  right: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
  right: 0;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
  right: 1px;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: #fff;
}

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}

.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529;
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  -ms-touch-action: pan-y;
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  transition: -webkit-transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}

.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  -webkit-transform: none;
  transform: none;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  z-index: 1;
  opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  z-index: 0;
  opacity: 0;
  transition: 0s 0.6s opacity;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-left,
  .carousel-fade .active.carousel-item-right {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}

.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: no-repeat 50% / 100% 100%;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 15;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}

.carousel-indicators li {
  box-sizing: content-box;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: .5;
  transition: opacity 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-indicators li {
    transition: none;
  }
}

.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
}

@-webkit-keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  -webkit-animation: spinner-border .75s linear infinite;
  animation: spinner-border .75s linear infinite;
}

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em;
}

@-webkit-keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    opacity: 1;
  }
}

@keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    opacity: 1;
  }
}

.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  -webkit-animation: spinner-grow .75s linear infinite;
  animation: spinner-grow .75s linear infinite;
}

.spinner-grow-sm {
  width: 1rem;
  height: 1rem;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.bg-primary {
  background-color: #007bff !important;
}

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #0062cc !important;
}

.bg-secondary {
  background-color: #6c757d !important;
}

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #545b62 !important;
}

.bg-success {
  background-color: #28a745 !important;
}

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #1e7e34 !important;
}

.bg-info {
  background-color: #17a2b8 !important;
}

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #117a8b !important;
}

.bg-warning {
  background-color: #ffc107 !important;
}

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #d39e00 !important;
}

.bg-danger {
  background-color: #dc3545 !important;
}

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #bd2130 !important;
}

.bg-light {
  background-color: #f8f9fa !important;
}

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important;
}

.bg-dark {
  background-color: #343a40 !important;
}

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1d2124 !important;
}

.bg-white {
  background-color: #fff !important;
}

.bg-transparent {
  background-color: transparent !important;
}

.border {
  border: 1px solid #dee2e6 !important;
}

.border-top {
  border-top: 1px solid #dee2e6 !important;
}

.border-right {
  border-right: 1px solid #dee2e6 !important;
}

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important;
}

.border-left {
  border-left: 1px solid #dee2e6 !important;
}

.border-0 {
  border: 0 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-right-0 {
  border-right: 0 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-left-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: #007bff !important;
}

.border-secondary {
  border-color: #6c757d !important;
}

.border-success {
  border-color: #28a745 !important;
}

.border-info {
  border-color: #17a2b8 !important;
}

.border-warning {
  border-color: #ffc107 !important;
}

.border-danger {
  border-color: #dc3545 !important;
}

.border-light {
  border-color: #f8f9fa !important;
}

.border-dark {
  border-color: #343a40 !important;
}

.border-white {
  border-color: #fff !important;
}

.rounded-sm {
  border-radius: 0.2rem !important;
}

.rounded {
  border-radius: 0.25rem !important;
}

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-lg {
  border-radius: 0.3rem !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: 50rem !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.d-none {
  display: none !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}

.d-inline-flex {
  display: -ms-inline-flexbox !important;
  display: inline-flex !important;
}

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-md-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media print {
  .d-print-none {
    display: none !important;
  }
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-print-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;
}

.embed-responsive::before {
  display: block;
  content: "";
}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.embed-responsive-21by9::before {
  padding-top: 42.857143%;
}

.embed-responsive-16by9::before {
  padding-top: 56.25%;
}

.embed-responsive-4by3::before {
  padding-top: 75%;
}

.embed-responsive-1by1::before {
  padding-top: 100%;
}

.flex-row {
  -ms-flex-direction: row !important;
  flex-direction: row !important;
}

.flex-column {
  -ms-flex-direction: column !important;
  flex-direction: column !important;
}

.flex-row-reverse {
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important;
}

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important;
}

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important;
}

.flex-fill {
  -ms-flex: 1 1 auto !important;
  flex: 1 1 auto !important;
}

.flex-grow-0 {
  -ms-flex-positive: 0 !important;
  flex-grow: 0 !important;
}

.flex-grow-1 {
  -ms-flex-positive: 1 !important;
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
  flex-shrink: 1 !important;
}

.justify-content-start {
  -ms-flex-pack: start !important;
  justify-content: flex-start !important;
}

.justify-content-end {
  -ms-flex-pack: end !important;
  justify-content: flex-end !important;
}

.justify-content-center {
  -ms-flex-pack: center !important;
  justify-content: center !important;
}

.justify-content-between {
  -ms-flex-pack: justify !important;
  justify-content: space-between !important;
}

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important;
}

.align-items-start {
  -ms-flex-align: start !important;
  align-items: flex-start !important;
}

.align-items-end {
  -ms-flex-align: end !important;
  align-items: flex-end !important;
}

.align-items-center {
  -ms-flex-align: center !important;
  align-items: center !important;
}

.align-items-baseline {
  -ms-flex-align: baseline !important;
  align-items: baseline !important;
}

.align-items-stretch {
  -ms-flex-align: stretch !important;
  align-items: stretch !important;
}

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important;
}

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important;
}

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important;
}

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important;
}

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important;
}

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important;
}

.align-self-auto {
  -ms-flex-item-align: auto !important;
  align-self: auto !important;
}

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important;
}

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important;
}

.align-self-center {
  -ms-flex-item-align: center !important;
  align-self: center !important;
}

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important;
}

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  align-self: stretch !important;
}

@media (min-width: 576px) {
  .flex-sm-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-sm-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-sm-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-sm-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-sm-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-sm-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-sm-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-sm-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 768px) {
  .flex-md-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-md-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-md-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-md-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-md-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-md-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-md-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-md-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-md-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-md-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 992px) {
  .flex-lg-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-lg-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-lg-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-lg-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-lg-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-lg-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-lg-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-lg-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 1200px) {
  .flex-xl-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-xl-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-xl-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-xl-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-xl-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-xl-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-xl-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-xl-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

.float-left {
  float: left !important;
}

.float-right {
  float: right !important;
}

.float-none {
  float: none !important;
}

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important;
  }
  .float-sm-right {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
}

@media (min-width: 768px) {
  .float-md-left {
    float: left !important;
  }
  .float-md-right {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
}

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important;
  }
  .float-lg-right {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
}

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important;
  }
  .float-xl-right {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.mh-100 {
  max-height: 100% !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.vw-100 {
  width: 100vw !important;
}

.vh-100 {
  height: 100vh !important;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  pointer-events: auto;
  content: "";
  background-color: rgba(0, 0, 0, 0);
}

.m-0 {
  margin: 0 !important;
}

.mt-0,
.my-0 {
  margin-top: 0 !important;
}

.mr-0,
.mx-0 {
  margin-right: 0 !important;
}

.mb-0,
.my-0 {
  margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
  margin-left: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.mt-1,
.my-1 {
  margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.mt-2,
.my-2 {
  margin-top: 0.5rem !important;
}

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important;
}

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.mt-3,
.my-3 {
  margin-top: 1rem !important;
}

.mr-3,
.mx-3 {
  margin-right: 1rem !important;
}

.mb-3,
.my-3 {
  margin-bottom: 1rem !important;
}

.ml-3,
.mx-3 {
  margin-left: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.mt-4,
.my-4 {
  margin-top: 1.5rem !important;
}

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.mt-5,
.my-5 {
  margin-top: 3rem !important;
}

.mr-5,
.mx-5 {
  margin-right: 3rem !important;
}

.mb-5,
.my-5 {
  margin-bottom: 3rem !important;
}

.ml-5,
.mx-5 {
  margin-left: 3rem !important;
}

.p-0 {
  padding: 0 !important;
}

.pt-0,
.py-0 {
  padding-top: 0 !important;
}

.pr-0,
.px-0 {
  padding-right: 0 !important;
}

.pb-0,
.py-0 {
  padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
  padding-left: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.pt-1,
.py-1 {
  padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
  padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
  padding-left: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.pt-2,
.py-2 {
  padding-top: 0.5rem !important;
}

.pr-2,
.px-2 {
  padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2 {
  padding-left: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.pt-3,
.py-3 {
  padding-top: 1rem !important;
}

.pr-3,
.px-3 {
  padding-right: 1rem !important;
}

.pb-3,
.py-3 {
  padding-bottom: 1rem !important;
}

.pl-3,
.px-3 {
  padding-left: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.pt-4,
.py-4 {
  padding-top: 1.5rem !important;
}

.pr-4,
.px-4 {
  padding-right: 1.5rem !important;
}

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4 {
  padding-left: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.pt-5,
.py-5 {
  padding-top: 3rem !important;
}

.pr-5,
.px-5 {
  padding-right: 3rem !important;
}

.pb-5,
.py-5 {
  padding-bottom: 3rem !important;
}

.pl-5,
.px-5 {
  padding-left: 3rem !important;
}

.m-n1 {
  margin: -0.25rem !important;
}

.mt-n1,
.my-n1 {
  margin-top: -0.25rem !important;
}

.mr-n1,
.mx-n1 {
  margin-right: -0.25rem !important;
}

.mb-n1,
.my-n1 {
  margin-bottom: -0.25rem !important;
}

.ml-n1,
.mx-n1 {
  margin-left: -0.25rem !important;
}

.m-n2 {
  margin: -0.5rem !important;
}

.mt-n2,
.my-n2 {
  margin-top: -0.5rem !important;
}

.mr-n2,
.mx-n2 {
  margin-right: -0.5rem !important;
}

.mb-n2,
.my-n2 {
  margin-bottom: -0.5rem !important;
}

.ml-n2,
.mx-n2 {
  margin-left: -0.5rem !important;
}

.m-n3 {
  margin: -1rem !important;
}

.mt-n3,
.my-n3 {
  margin-top: -1rem !important;
}

.mr-n3,
.mx-n3 {
  margin-right: -1rem !important;
}

.mb-n3,
.my-n3 {
  margin-bottom: -1rem !important;
}

.ml-n3,
.mx-n3 {
  margin-left: -1rem !important;
}

.m-n4 {
  margin: -1.5rem !important;
}

.mt-n4,
.my-n4 {
  margin-top: -1.5rem !important;
}

.mr-n4,
.mx-n4 {
  margin-right: -1.5rem !important;
}

.mb-n4,
.my-n4 {
  margin-bottom: -1.5rem !important;
}

.ml-n4,
.mx-n4 {
  margin-left: -1.5rem !important;
}

.m-n5 {
  margin: -3rem !important;
}

.mt-n5,
.my-n5 {
  margin-top: -3rem !important;
}

.mr-n5,
.mx-n5 {
  margin-right: -3rem !important;
}

.mb-n5,
.my-n5 {
  margin-bottom: -3rem !important;
}

.ml-n5,
.mx-n5 {
  margin-left: -3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mt-auto,
.my-auto {
  margin-top: auto !important;
}

.mr-auto,
.mx-auto {
  margin-right: auto !important;
}

.mb-auto,
.my-auto {
  margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
  margin-left: auto !important;
}

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important;
  }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important;
  }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important;
  }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important;
  }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important;
  }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important;
  }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important;
  }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important;
  }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important;
  }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important;
  }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important;
  }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important;
  }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important;
  }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important;
  }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important;
  }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important;
  }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important;
  }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important;
  }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important;
  }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important;
  }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important;
  }
  .m-sm-n1 {
    margin: -0.25rem !important;
  }
  .mt-sm-n1,
  .my-sm-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-sm-n1,
  .mx-sm-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-sm-n1,
  .my-sm-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-sm-n1,
  .mx-sm-n1 {
    margin-left: -0.25rem !important;
  }
  .m-sm-n2 {
    margin: -0.5rem !important;
  }
  .mt-sm-n2,
  .my-sm-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-sm-n2,
  .mx-sm-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-sm-n2,
  .my-sm-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-sm-n2,
  .mx-sm-n2 {
    margin-left: -0.5rem !important;
  }
  .m-sm-n3 {
    margin: -1rem !important;
  }
  .mt-sm-n3,
  .my-sm-n3 {
    margin-top: -1rem !important;
  }
  .mr-sm-n3,
  .mx-sm-n3 {
    margin-right: -1rem !important;
  }
  .mb-sm-n3,
  .my-sm-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-sm-n3,
  .mx-sm-n3 {
    margin-left: -1rem !important;
  }
  .m-sm-n4 {
    margin: -1.5rem !important;
  }
  .mt-sm-n4,
  .my-sm-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-sm-n4,
  .mx-sm-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-sm-n4,
  .my-sm-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-sm-n4,
  .mx-sm-n4 {
    margin-left: -1.5rem !important;
  }
  .m-sm-n5 {
    margin: -3rem !important;
  }
  .mt-sm-n5,
  .my-sm-n5 {
    margin-top: -3rem !important;
  }
  .mr-sm-n5,
  .mx-sm-n5 {
    margin-right: -3rem !important;
  }
  .mb-sm-n5,
  .my-sm-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-sm-n5,
  .mx-sm-n5 {
    margin-left: -3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important;
  }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important;
  }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important;
  }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important;
  }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important;
  }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important;
  }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important;
  }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important;
  }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important;
  }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important;
  }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important;
  }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important;
  }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important;
  }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important;
  }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important;
  }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important;
  }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important;
  }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important;
  }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important;
  }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important;
  }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important;
  }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important;
  }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important;
  }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important;
  }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important;
  }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important;
  }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important;
  }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important;
  }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important;
  }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important;
  }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important;
  }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important;
  }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important;
  }
  .m-md-n1 {
    margin: -0.25rem !important;
  }
  .mt-md-n1,
  .my-md-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-md-n1,
  .mx-md-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-md-n1,
  .my-md-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-md-n1,
  .mx-md-n1 {
    margin-left: -0.25rem !important;
  }
  .m-md-n2 {
    margin: -0.5rem !important;
  }
  .mt-md-n2,
  .my-md-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-md-n2,
  .mx-md-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-md-n2,
  .my-md-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-md-n2,
  .mx-md-n2 {
    margin-left: -0.5rem !important;
  }
  .m-md-n3 {
    margin: -1rem !important;
  }
  .mt-md-n3,
  .my-md-n3 {
    margin-top: -1rem !important;
  }
  .mr-md-n3,
  .mx-md-n3 {
    margin-right: -1rem !important;
  }
  .mb-md-n3,
  .my-md-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-md-n3,
  .mx-md-n3 {
    margin-left: -1rem !important;
  }
  .m-md-n4 {
    margin: -1.5rem !important;
  }
  .mt-md-n4,
  .my-md-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-md-n4,
  .mx-md-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-md-n4,
  .my-md-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-md-n4,
  .mx-md-n4 {
    margin-left: -1.5rem !important;
  }
  .m-md-n5 {
    margin: -3rem !important;
  }
  .mt-md-n5,
  .my-md-n5 {
    margin-top: -3rem !important;
  }
  .mr-md-n5,
  .mx-md-n5 {
    margin-right: -3rem !important;
  }
  .mb-md-n5,
  .my-md-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-md-n5,
  .mx-md-n5 {
    margin-left: -3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important;
  }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important;
  }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important;
  }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important;
  }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important;
  }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important;
  }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important;
  }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important;
  }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important;
  }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important;
  }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important;
  }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important;
  }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important;
  }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important;
  }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important;
  }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important;
  }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important;
  }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important;
  }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important;
  }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important;
  }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important;
  }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important;
  }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important;
  }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important;
  }
  .m-lg-n1 {
    margin: -0.25rem !important;
  }
  .mt-lg-n1,
  .my-lg-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-lg-n1,
  .mx-lg-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-lg-n1,
  .my-lg-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-lg-n1,
  .mx-lg-n1 {
    margin-left: -0.25rem !important;
  }
  .m-lg-n2 {
    margin: -0.5rem !important;
  }
  .mt-lg-n2,
  .my-lg-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-lg-n2,
  .mx-lg-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-lg-n2,
  .my-lg-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-lg-n2,
  .mx-lg-n2 {
    margin-left: -0.5rem !important;
  }
  .m-lg-n3 {
    margin: -1rem !important;
  }
  .mt-lg-n3,
  .my-lg-n3 {
    margin-top: -1rem !important;
  }
  .mr-lg-n3,
  .mx-lg-n3 {
    margin-right: -1rem !important;
  }
  .mb-lg-n3,
  .my-lg-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-lg-n3,
  .mx-lg-n3 {
    margin-left: -1rem !important;
  }
  .m-lg-n4 {
    margin: -1.5rem !important;
  }
  .mt-lg-n4,
  .my-lg-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-lg-n4,
  .mx-lg-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-lg-n4,
  .my-lg-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-lg-n4,
  .mx-lg-n4 {
    margin-left: -1.5rem !important;
  }
  .m-lg-n5 {
    margin: -3rem !important;
  }
  .mt-lg-n5,
  .my-lg-n5 {
    margin-top: -3rem !important;
  }
  .mr-lg-n5,
  .mx-lg-n5 {
    margin-right: -3rem !important;
  }
  .mb-lg-n5,
  .my-lg-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-lg-n5,
  .mx-lg-n5 {
    margin-left: -3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important;
  }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important;
  }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important;
  }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important;
  }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important;
  }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important;
  }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important;
  }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important;
  }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important;
  }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important;
  }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important;
  }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important;
  }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important;
  }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important;
  }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important;
  }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important;
  }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important;
  }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important;
  }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important;
  }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important;
  }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important;
  }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important;
  }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important;
  }
  .m-xl-n1 {
    margin: -0.25rem !important;
  }
  .mt-xl-n1,
  .my-xl-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-xl-n1,
  .mx-xl-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-xl-n1,
  .my-xl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-xl-n1,
  .mx-xl-n1 {
    margin-left: -0.25rem !important;
  }
  .m-xl-n2 {
    margin: -0.5rem !important;
  }
  .mt-xl-n2,
  .my-xl-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-xl-n2,
  .mx-xl-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-xl-n2,
  .my-xl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-xl-n2,
  .mx-xl-n2 {
    margin-left: -0.5rem !important;
  }
  .m-xl-n3 {
    margin: -1rem !important;
  }
  .mt-xl-n3,
  .my-xl-n3 {
    margin-top: -1rem !important;
  }
  .mr-xl-n3,
  .mx-xl-n3 {
    margin-right: -1rem !important;
  }
  .mb-xl-n3,
  .my-xl-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-xl-n3,
  .mx-xl-n3 {
    margin-left: -1rem !important;
  }
  .m-xl-n4 {
    margin: -1.5rem !important;
  }
  .mt-xl-n4,
  .my-xl-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-xl-n4,
  .mx-xl-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-xl-n4,
  .my-xl-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-xl-n4,
  .mx-xl-n4 {
    margin-left: -1.5rem !important;
  }
  .m-xl-n5 {
    margin: -3rem !important;
  }
  .mt-xl-n5,
  .my-xl-n5 {
    margin-top: -3rem !important;
  }
  .mr-xl-n5,
  .mx-xl-n5 {
    margin-right: -3rem !important;
  }
  .mb-xl-n5,
  .my-xl-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-xl-n5,
  .mx-xl-n5 {
    margin-left: -3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important;
  }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important;
  }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important;
  }
}

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}

.text-justify {
  text-align: justify !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.text-left {
  text-align: left !important;
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }
  .text-sm-right {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }
  .text-md-right {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }
  .text-lg-right {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important;
  }
  .text-xl-right {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-lighter {
  font-weight: lighter !important;
}

.font-weight-normal {
  font-weight: 400 !important;
}

.font-weight-bold {
  font-weight: 700 !important;
}

.font-weight-bolder {
  font-weight: bolder !important;
}

.font-italic {
  font-style: italic !important;
}

.text-white {
  color: #fff !important;
}

.text-primary {
  color: #007bff !important;
}

a.text-primary:hover, a.text-primary:focus {
  color: #0056b3 !important;
}

.text-secondary {
  color: #6c757d !important;
}

a.text-secondary:hover, a.text-secondary:focus {
  color: #494f54 !important;
}

.text-success {
  color: #28a745 !important;
}

a.text-success:hover, a.text-success:focus {
  color: #19692c !important;
}

.text-info {
  color: #17a2b8 !important;
}

a.text-info:hover, a.text-info:focus {
  color: #0f6674 !important;
}

.text-warning {
  color: #ffc107 !important;
}

a.text-warning:hover, a.text-warning:focus {
  color: #ba8b00 !important;
}

.text-danger {
  color: #dc3545 !important;
}

a.text-danger:hover, a.text-danger:focus {
  color: #a71d2a !important;
}

.text-light {
  color: #f8f9fa !important;
}

a.text-light:hover, a.text-light:focus {
  color: #cbd3da !important;
}

.text-dark {
  color: #343a40 !important;
}

a.text-dark:hover, a.text-dark:focus {
  color: #121416 !important;
}

.text-body {
  color: #212529 !important;
}

.text-muted {
  color: #6c757d !important;
}

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-break {
  word-break: break-word !important;
  overflow-wrap: break-word !important;
}

.text-reset {
  color: inherit !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important;
  }
  a:not(.btn) {
    text-decoration: underline;
  }
  abbr[title]::after {
    content: " (" attr(title) ")";
  }
  pre {
    white-space: pre-wrap !important;
  }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  @page {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }
  .container {
    min-width: 992px !important;
  }
  .navbar {
    display: none;
  }
  .badge {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important;
  }
  .table-dark {
    color: inherit;
  }
  .table-dark th,
  .table-dark td,
  .table-dark thead th,
  .table-dark tbody + tbody {
    border-color: #dee2e6;
  }
  .table .thead-dark th {
    color: inherit;
    border-color: #dee2e6;
  }
}
/*# sourceMappingURL=bootstrap.css.map */

@charset "UTF-8";
/*!
 * Material Design for Bootstrap 4
 * Version: MDB FREE 4.8.11
 *
 *
 * Copyright: Material Design for Bootstrap
 * https://mdbootstrap.com/
 *
 * Read the license: https://mdbootstrap.com/general/license/
 *
 *
 * Documentation: https://mdbootstrap.com/
 *
 * Getting started: https://mdbootstrap.com/docs/jquery/getting-started/download/
 *
 * Tutorials: https://mdbootstrap.com/education/bootstrap/
 *
 * Templates: https://mdbootstrap.com/templates/
 *
 * Support: https://mdbootstrap.com/support/
 *
 * Contact: office@mdbootstrap.com
 *
 * Attribution: Animate CSS, Twitter Bootstrap, Materialize CSS, Normalize CSS, Waves JS, WOW JS, Toastr, Chart.js
 *
 */
.mdb-color.lighten-5 {
  background-color: #d0d6e2 !important; }

.mdb-color.lighten-4 {
  background-color: #b1bace !important; }

.mdb-color.lighten-3 {
  background-color: #929fba !important; }

.mdb-color.lighten-2 {
  background-color: #7283a7 !important; }

.mdb-color.lighten-1 {
  background-color: #59698d !important; }

.mdb-color {
  background-color: #45526e !important; }

.mdb-color-text {
  color: #45526e !important; }

.rgba-mdb-color-slight,
.rgba-mdb-color-slight:after {
  background-color: rgba(69, 82, 110, 0.1); }

.rgba-mdb-color-light,
.rgba-mdb-color-light:after {
  background-color: rgba(69, 82, 110, 0.3); }

.rgba-mdb-color-strong,
.rgba-mdb-color-strong:after {
  background-color: rgba(69, 82, 110, 0.7); }

.mdb-color.darken-1 {
  background-color: #3b465e !important; }

.mdb-color.darken-2 {
  background-color: #2e3951 !important; }

.mdb-color.darken-3 {
  background-color: #1c2a48 !important; }

.mdb-color.darken-4 {
  background-color: #1c2331 !important; }

.red.lighten-5 {
  background-color: #ffebee !important; }

.red.lighten-4 {
  background-color: #ffcdd2 !important; }

.red.lighten-3 {
  background-color: #ef9a9a !important; }

.red.lighten-2 {
  background-color: #e57373 !important; }

.red.lighten-1 {
  background-color: #ef5350 !important; }

.red {
  background-color: #f44336 !important; }

.red-text {
  color: #f44336 !important; }

.rgba-red-slight,
.rgba-red-slight:after {
  background-color: rgba(244, 67, 54, 0.1); }

.rgba-red-light,
.rgba-red-light:after {
  background-color: rgba(244, 67, 54, 0.3); }

.rgba-red-strong,
.rgba-red-strong:after {
  background-color: rgba(244, 67, 54, 0.7); }

.red.darken-1 {
  background-color: #e53935 !important; }

.red.darken-2 {
  background-color: #d32f2f !important; }

.red.darken-3 {
  background-color: #c62828 !important; }

.red.darken-4 {
  background-color: #b71c1c !important; }

.red.accent-1 {
  background-color: #ff8a80 !important; }

.red.accent-2 {
  background-color: #ff5252 !important; }

.red.accent-3 {
  background-color: #ff1744 !important; }

.red.accent-4 {
  background-color: #d50000 !important; }

.pink.lighten-5 {
  background-color: #fce4ec !important; }

.pink.lighten-4 {
  background-color: #f8bbd0 !important; }

.pink.lighten-3 {
  background-color: #f48fb1 !important; }

.pink.lighten-2 {
  background-color: #f06292 !important; }

.pink.lighten-1 {
  background-color: #ec407a !important; }

.pink {
  background-color: #e91e63 !important; }

.pink-text {
  color: #e91e63 !important; }

.rgba-pink-slight,
.rgba-pink-slight:after {
  background-color: rgba(233, 30, 99, 0.1); }

.rgba-pink-light,
.rgba-pink-light:after {
  background-color: rgba(233, 30, 99, 0.3); }

.rgba-pink-strong,
.rgba-pink-strong:after {
  background-color: rgba(233, 30, 99, 0.7); }

.pink.darken-1 {
  background-color: #d81b60 !important; }

.pink.darken-2 {
  background-color: #c2185b !important; }

.pink.darken-3 {
  background-color: #ad1457 !important; }

.pink.darken-4 {
  background-color: #880e4f !important; }

.pink.accent-1 {
  background-color: #ff80ab !important; }

.pink.accent-2 {
  background-color: #ff4081 !important; }

.pink.accent-3 {
  background-color: #f50057 !important; }

.pink.accent-4 {
  background-color: #c51162 !important; }

.purple.lighten-5 {
  background-color: #f3e5f5 !important; }

.purple.lighten-4 {
  background-color: #e1bee7 !important; }

.purple.lighten-3 {
  background-color: #ce93d8 !important; }

.purple.lighten-2 {
  background-color: #ba68c8 !important; }

.purple.lighten-1 {
  background-color: #ab47bc !important; }

.purple {
  background-color: #9c27b0 !important; }

.purple-text {
  color: #9c27b0 !important; }

.rgba-purple-slight,
.rgba-purple-slight:after {
  background-color: rgba(156, 39, 176, 0.1); }

.rgba-purple-light,
.rgba-purple-light:after {
  background-color: rgba(156, 39, 176, 0.3); }

.rgba-purple-strong,
.rgba-purple-strong:after {
  background-color: rgba(156, 39, 176, 0.7); }

.purple.darken-1 {
  background-color: #8e24aa !important; }

.purple.darken-2 {
  background-color: #7b1fa2 !important; }

.purple.darken-3 {
  background-color: #6a1b9a !important; }

.purple.darken-4 {
  background-color: #4a148c !important; }

.purple.accent-1 {
  background-color: #ea80fc !important; }

.purple.accent-2 {
  background-color: #e040fb !important; }

.purple.accent-3 {
  background-color: #d500f9 !important; }

.purple.accent-4 {
  background-color: #a0f !important; }

.deep-purple.lighten-5 {
  background-color: #ede7f6 !important; }

.deep-purple.lighten-4 {
  background-color: #d1c4e9 !important; }

.deep-purple.lighten-3 {
  background-color: #b39ddb !important; }

.deep-purple.lighten-2 {
  background-color: #9575cd !important; }

.deep-purple.lighten-1 {
  background-color: #7e57c2 !important; }

.deep-purple {
  background-color: #673ab7 !important; }

.deep-purple-text {
  color: #673ab7 !important; }

.rgba-deep-purple-slight,
.rgba-deep-purple-slight:after {
  background-color: rgba(103, 58, 183, 0.1); }

.rgba-deep-purple-light,
.rgba-deep-purple-light:after {
  background-color: rgba(103, 58, 183, 0.3); }

.rgba-deep-purple-strong,
.rgba-deep-purple-strong:after {
  background-color: rgba(103, 58, 183, 0.7); }

.deep-purple.darken-1 {
  background-color: #5e35b1 !important; }

.deep-purple.darken-2 {
  background-color: #512da8 !important; }

.deep-purple.darken-3 {
  background-color: #4527a0 !important; }

.deep-purple.darken-4 {
  background-color: #311b92 !important; }

.deep-purple.accent-1 {
  background-color: #b388ff !important; }

.deep-purple.accent-2 {
  background-color: #7c4dff !important; }

.deep-purple.accent-3 {
  background-color: #651fff !important; }

.deep-purple.accent-4 {
  background-color: #6200ea !important; }

.indigo.lighten-5 {
  background-color: #e8eaf6 !important; }

.indigo.lighten-4 {
  background-color: #c5cae9 !important; }

.indigo.lighten-3 {
  background-color: #9fa8da !important; }

.indigo.lighten-2 {
  background-color: #7986cb !important; }

.indigo.lighten-1 {
  background-color: #5c6bc0 !important; }

.indigo {
  background-color: #3f51b5 !important; }

.indigo-text {
  color: #3f51b5 !important; }

.rgba-indigo-slight,
.rgba-indigo-slight:after {
  background-color: rgba(63, 81, 181, 0.1); }

.rgba-indigo-light,
.rgba-indigo-light:after {
  background-color: rgba(63, 81, 181, 0.3); }

.rgba-indigo-strong,
.rgba-indigo-strong:after {
  background-color: rgba(63, 81, 181, 0.7); }

.indigo.darken-1 {
  background-color: #3949ab !important; }

.indigo.darken-2 {
  background-color: #303f9f !important; }

.indigo.darken-3 {
  background-color: #283593 !important; }

.indigo.darken-4 {
  background-color: #1a237e !important; }

.indigo.accent-1 {
  background-color: #8c9eff !important; }

.indigo.accent-2 {
  background-color: #536dfe !important; }

.indigo.accent-3 {
  background-color: #3d5afe !important; }

.indigo.accent-4 {
  background-color: #304ffe !important; }

.blue.lighten-5 {
  background-color: #e3f2fd !important; }

.blue.lighten-4 {
  background-color: #bbdefb !important; }

.blue.lighten-3 {
  background-color: #90caf9 !important; }

.blue.lighten-2 {
  background-color: #64b5f6 !important; }

.blue.lighten-1 {
  background-color: #42a5f5 !important; }

.blue {
  background-color: #2196f3 !important; }

.blue-text {
  color: #2196f3 !important; }

.rgba-blue-slight,
.rgba-blue-slight:after {
  background-color: rgba(33, 150, 243, 0.1); }

.rgba-blue-light,
.rgba-blue-light:after {
  background-color: rgba(33, 150, 243, 0.3); }

.rgba-blue-strong,
.rgba-blue-strong:after {
  background-color: rgba(33, 150, 243, 0.7); }

.blue.darken-1 {
  background-color: #1e88e5 !important; }

.blue.darken-2 {
  background-color: #1976d2 !important; }

.blue.darken-3 {
  background-color: #1565c0 !important; }

.blue.darken-4 {
  background-color: #0d47a1 !important; }

.blue.accent-1 {
  background-color: #82b1ff !important; }

.blue.accent-2 {
  background-color: #448aff !important; }

.blue.accent-3 {
  background-color: #2979ff !important; }

.blue.accent-4 {
  background-color: #2962ff !important; }

.light-blue.lighten-5 {
  background-color: #e1f5fe !important; }

.light-blue.lighten-4 {
  background-color: #b3e5fc !important; }

.light-blue.lighten-3 {
  background-color: #81d4fa !important; }

.light-blue.lighten-2 {
  background-color: #4fc3f7 !important; }

.light-blue.lighten-1 {
  background-color: #29b6f6 !important; }

.light-blue {
  background-color: #03a9f4 !important; }

.light-blue-text {
  color: #03a9f4 !important; }

.rgba-light-blue-slight,
.rgba-light-blue-slight:after {
  background-color: rgba(3, 169, 244, 0.1); }

.rgba-light-blue-light,
.rgba-light-blue-light:after {
  background-color: rgba(3, 169, 244, 0.3); }

.rgba-light-blue-strong,
.rgba-light-blue-strong:after {
  background-color: rgba(3, 169, 244, 0.7); }

.light-blue.darken-1 {
  background-color: #039be5 !important; }

.light-blue.darken-2 {
  background-color: #0288d1 !important; }

.light-blue.darken-3 {
  background-color: #0277bd !important; }

.light-blue.darken-4 {
  background-color: #01579b !important; }

.light-blue.accent-1 {
  background-color: #80d8ff !important; }

.light-blue.accent-2 {
  background-color: #40c4ff !important; }

.light-blue.accent-3 {
  background-color: #00b0ff !important; }

.light-blue.accent-4 {
  background-color: #0091ea !important; }

.cyan.lighten-5 {
  background-color: #e0f7fa !important; }

.cyan.lighten-4 {
  background-color: #b2ebf2 !important; }

.cyan.lighten-3 {
  background-color: #80deea !important; }

.cyan.lighten-2 {
  background-color: #4dd0e1 !important; }

.cyan.lighten-1 {
  background-color: #26c6da !important; }

.cyan {
  background-color: #00bcd4 !important; }

.cyan-text {
  color: #00bcd4 !important; }

.rgba-cyan-slight,
.rgba-cyan-slight:after {
  background-color: rgba(0, 188, 212, 0.1); }

.rgba-cyan-light,
.rgba-cyan-light:after {
  background-color: rgba(0, 188, 212, 0.3); }

.rgba-cyan-strong,
.rgba-cyan-strong:after {
  background-color: rgba(0, 188, 212, 0.7); }

.cyan.darken-1 {
  background-color: #00acc1 !important; }

.cyan.darken-2 {
  background-color: #0097a7 !important; }

.cyan.darken-3 {
  background-color: #00838f !important; }

.cyan.darken-4 {
  background-color: #006064 !important; }

.cyan.accent-1 {
  background-color: #84ffff !important; }

.cyan.accent-2 {
  background-color: #18ffff !important; }

.cyan.accent-3 {
  background-color: #00e5ff !important; }

.cyan.accent-4 {
  background-color: #00b8d4 !important; }

.teal.lighten-5 {
  background-color: #e0f2f1 !important; }

.teal.lighten-4 {
  background-color: #b2dfdb !important; }

.teal.lighten-3 {
  background-color: #80cbc4 !important; }

.teal.lighten-2 {
  background-color: #4db6ac !important; }

.teal.lighten-1 {
  background-color: #26a69a !important; }

.teal {
  background-color: #009688 !important; }

.teal-text {
  color: #009688 !important; }

.rgba-teal-slight,
.rgba-teal-slight:after {
  background-color: rgba(0, 150, 136, 0.1); }

.rgba-teal-light,
.rgba-teal-light:after {
  background-color: rgba(0, 150, 136, 0.3); }

.rgba-teal-strong,
.rgba-teal-strong:after {
  background-color: rgba(0, 150, 136, 0.7); }

.teal.darken-1 {
  background-color: #00897b !important; }

.teal.darken-2 {
  background-color: #00796b !important; }

.teal.darken-3 {
  background-color: #00695c !important; }

.teal.darken-4 {
  background-color: #004d40 !important; }

.teal.accent-1 {
  background-color: #a7ffeb !important; }

.teal.accent-2 {
  background-color: #64ffda !important; }

.teal.accent-3 {
  background-color: #1de9b6 !important; }

.teal.accent-4 {
  background-color: #00bfa5 !important; }

.green.lighten-5 {
  background-color: #e8f5e9 !important; }

.green.lighten-4 {
  background-color: #c8e6c9 !important; }

.green.lighten-3 {
  background-color: #a5d6a7 !important; }

.green.lighten-2 {
  background-color: #81c784 !important; }

.green.lighten-1 {
  background-color: #66bb6a !important; }

.green {
  background-color: #4caf50 !important; }

.green-text {
  color: #4caf50 !important; }

.rgba-green-slight,
.rgba-green-slight:after {
  background-color: rgba(76, 175, 80, 0.1); }

.rgba-green-light,
.rgba-green-light:after {
  background-color: rgba(76, 175, 80, 0.3); }

.rgba-green-strong,
.rgba-green-strong:after {
  background-color: rgba(76, 175, 80, 0.7); }

.green.darken-1 {
  background-color: #43a047 !important; }

.green.darken-2 {
  background-color: #388e3c !important; }

.green.darken-3 {
  background-color: #2e7d32 !important; }

.green.darken-4 {
  background-color: #1b5e20 !important; }

.green.accent-1 {
  background-color: #b9f6ca !important; }

.green.accent-2 {
  background-color: #69f0ae !important; }

.green.accent-3 {
  background-color: #00e676 !important; }

.green.accent-4 {
  background-color: #00c853 !important; }

.light-green.lighten-5 {
  background-color: #f1f8e9 !important; }

.light-green.lighten-4 {
  background-color: #dcedc8 !important; }

.light-green.lighten-3 {
  background-color: #c5e1a5 !important; }

.light-green.lighten-2 {
  background-color: #aed581 !important; }

.light-green.lighten-1 {
  background-color: #9ccc65 !important; }

.light-green {
  background-color: #8bc34a !important; }

.light-green-text {
  color: #8bc34a !important; }

.rgba-light-green-slight,
.rgba-light-green-slight:after {
  background-color: rgba(139, 195, 74, 0.1); }

.rgba-light-green-light,
.rgba-light-green-light:after {
  background-color: rgba(139, 195, 74, 0.3); }

.rgba-light-green-strong,
.rgba-light-green-strong:after {
  background-color: rgba(139, 195, 74, 0.7); }

.light-green.darken-1 {
  background-color: #7cb342 !important; }

.light-green.darken-2 {
  background-color: #689f38 !important; }

.light-green.darken-3 {
  background-color: #558b2f !important; }

.light-green.darken-4 {
  background-color: #33691e !important; }

.light-green.accent-1 {
  background-color: #ccff90 !important; }

.light-green.accent-2 {
  background-color: #b2ff59 !important; }

.light-green.accent-3 {
  background-color: #76ff03 !important; }

.light-green.accent-4 {
  background-color: #64dd17 !important; }

.lime.lighten-5 {
  background-color: #f9fbe7 !important; }

.lime.lighten-4 {
  background-color: #f0f4c3 !important; }

.lime.lighten-3 {
  background-color: #e6ee9c !important; }

.lime.lighten-2 {
  background-color: #dce775 !important; }

.lime.lighten-1 {
  background-color: #d4e157 !important; }

.lime {
  background-color: #cddc39 !important; }

.lime-text {
  color: #cddc39 !important; }

.rgba-lime-slight,
.rgba-lime-slight:after {
  background-color: rgba(205, 220, 57, 0.1); }

.rgba-lime-light,
.rgba-lime-light:after {
  background-color: rgba(205, 220, 57, 0.3); }

.rgba-lime-strong,
.rgba-lime-strong:after {
  background-color: rgba(205, 220, 57, 0.7); }

.lime.darken-1 {
  background-color: #c0ca33 !important; }

.lime.darken-2 {
  background-color: #afb42b !important; }

.lime.darken-3 {
  background-color: #9e9d24 !important; }

.lime.darken-4 {
  background-color: #827717 !important; }

.lime.accent-1 {
  background-color: #f4ff81 !important; }

.lime.accent-2 {
  background-color: #eeff41 !important; }

.lime.accent-3 {
  background-color: #c6ff00 !important; }

.lime.accent-4 {
  background-color: #aeea00 !important; }

.yellow.lighten-5 {
  background-color: #fffde7 !important; }

.yellow.lighten-4 {
  background-color: #fff9c4 !important; }

.yellow.lighten-3 {
  background-color: #fff59d !important; }

.yellow.lighten-2 {
  background-color: #fff176 !important; }

.yellow.lighten-1 {
  background-color: #ffee58 !important; }

.yellow {
  background-color: #ffeb3b !important; }

.yellow-text {
  color: #ffeb3b !important; }

.rgba-yellow-slight,
.rgba-yellow-slight:after {
  background-color: rgba(255, 235, 59, 0.1); }

.rgba-yellow-light,
.rgba-yellow-light:after {
  background-color: rgba(255, 235, 59, 0.3); }

.rgba-yellow-strong,
.rgba-yellow-strong:after {
  background-color: rgba(255, 235, 59, 0.7); }

.yellow.darken-1 {
  background-color: #fdd835 !important; }

.yellow.darken-2 {
  background-color: #fbc02d !important; }

.yellow.darken-3 {
  background-color: #f9a825 !important; }

.yellow.darken-4 {
  background-color: #f57f17 !important; }

.yellow.accent-1 {
  background-color: #ffff8d !important; }

.yellow.accent-2 {
  background-color: #ff0 !important; }

.yellow.accent-3 {
  background-color: #ffea00 !important; }

.yellow.accent-4 {
  background-color: #ffd600 !important; }

.amber.lighten-5 {
  background-color: #fff8e1 !important; }

.amber.lighten-4 {
  background-color: #ffecb3 !important; }

.amber.lighten-3 {
  background-color: #ffe082 !important; }

.amber.lighten-2 {
  background-color: #ffd54f !important; }

.amber.lighten-1 {
  background-color: #ffca28 !important; }

.amber {
  background-color: #ffc107 !important; }

.amber-text {
  color: #ffc107 !important; }

.rgba-amber-slight,
.rgba-amber-slight:after {
  background-color: rgba(255, 193, 7, 0.1); }

.rgba-amber-light,
.rgba-amber-light:after {
  background-color: rgba(255, 193, 7, 0.3); }

.rgba-amber-strong,
.rgba-amber-strong:after {
  background-color: rgba(255, 193, 7, 0.7); }

.amber.darken-1 {
  background-color: #ffb300 !important; }

.amber.darken-2 {
  background-color: #ffa000 !important; }

.amber.darken-3 {
  background-color: #ff8f00 !important; }

.amber.darken-4 {
  background-color: #ff6f00 !important; }

.amber.accent-1 {
  background-color: #ffe57f !important; }

.amber.accent-2 {
  background-color: #ffd740 !important; }

.amber.accent-3 {
  background-color: #ffc400 !important; }

.amber.accent-4 {
  background-color: #ffab00 !important; }

.orange.lighten-5 {
  background-color: #fff3e0 !important; }

.orange.lighten-4 {
  background-color: #ffe0b2 !important; }

.orange.lighten-3 {
  background-color: #ffcc80 !important; }

.orange.lighten-2 {
  background-color: #ffb74d !important; }

.orange.lighten-1 {
  background-color: #ffa726 !important; }

.orange {
  background-color: #ff9800 !important; }

.orange-text {
  color: #ff9800 !important; }

.rgba-orange-slight,
.rgba-orange-slight:after {
  background-color: rgba(255, 152, 0, 0.1); }

.rgba-orange-light,
.rgba-orange-light:after {
  background-color: rgba(255, 152, 0, 0.3); }

.rgba-orange-strong,
.rgba-orange-strong:after {
  background-color: rgba(255, 152, 0, 0.7); }

.orange.darken-1 {
  background-color: #fb8c00 !important; }

.orange.darken-2 {
  background-color: #f57c00 !important; }

.orange.darken-3 {
  background-color: #ef6c00 !important; }

.orange.darken-4 {
  background-color: #e65100 !important; }

.orange.accent-1 {
  background-color: #ffd180 !important; }

.orange.accent-2 {
  background-color: #ffab40 !important; }

.orange.accent-3 {
  background-color: #ff9100 !important; }

.orange.accent-4 {
  background-color: #ff6d00 !important; }

.deep-orange.lighten-5 {
  background-color: #fbe9e7 !important; }

.deep-orange.lighten-4 {
  background-color: #ffccbc !important; }

.deep-orange.lighten-3 {
  background-color: #ffab91 !important; }

.deep-orange.lighten-2 {
  background-color: #ff8a65 !important; }

.deep-orange.lighten-1 {
  background-color: #ff7043 !important; }

.deep-orange {
  background-color: #ff5722 !important; }

.deep-orange-text {
  color: #ff5722 !important; }

.rgba-deep-orange-slight,
.rgba-deep-orange-slight:after {
  background-color: rgba(255, 87, 34, 0.1); }

.rgba-deep-orange-light,
.rgba-deep-orange-light:after {
  background-color: rgba(255, 87, 34, 0.3); }

.rgba-deep-orange-strong,
.rgba-deep-orange-strong:after {
  background-color: rgba(255, 87, 34, 0.7); }

.deep-orange.darken-1 {
  background-color: #f4511e !important; }

.deep-orange.darken-2 {
  background-color: #e64a19 !important; }

.deep-orange.darken-3 {
  background-color: #d84315 !important; }

.deep-orange.darken-4 {
  background-color: #bf360c !important; }

.deep-orange.accent-1 {
  background-color: #ff9e80 !important; }

.deep-orange.accent-2 {
  background-color: #ff6e40 !important; }

.deep-orange.accent-3 {
  background-color: #ff3d00 !important; }

.deep-orange.accent-4 {
  background-color: #dd2c00 !important; }

.brown.lighten-5 {
  background-color: #efebe9 !important; }

.brown.lighten-4 {
  background-color: #d7ccc8 !important; }

.brown.lighten-3 {
  background-color: #bcaaa4 !important; }

.brown.lighten-2 {
  background-color: #a1887f !important; }

.brown.lighten-1 {
  background-color: #8d6e63 !important; }

.brown {
  background-color: #795548 !important; }

.brown-text {
  color: #795548 !important; }

.rgba-brown-slight,
.rgba-brown-slight:after {
  background-color: rgba(121, 85, 72, 0.1); }

.rgba-brown-light,
.rgba-brown-light:after {
  background-color: rgba(121, 85, 72, 0.3); }

.rgba-brown-strong,
.rgba-brown-strong:after {
  background-color: rgba(121, 85, 72, 0.7); }

.brown.darken-1 {
  background-color: #6d4c41 !important; }

.brown.darken-2 {
  background-color: #5d4037 !important; }

.brown.darken-3 {
  background-color: #4e342e !important; }

.brown.darken-4 {
  background-color: #3e2723 !important; }

.blue-grey.lighten-5 {
  background-color: #eceff1 !important; }

.blue-grey.lighten-4 {
  background-color: #cfd8dc !important; }

.blue-grey.lighten-3 {
  background-color: #b0bec5 !important; }

.blue-grey.lighten-2 {
  background-color: #90a4ae !important; }

.blue-grey.lighten-1 {
  background-color: #78909c !important; }

.blue-grey {
  background-color: #607d8b !important; }

.blue-grey-text {
  color: #607d8b !important; }

.rgba-blue-grey-slight,
.rgba-blue-grey-slight:after {
  background-color: rgba(96, 125, 139, 0.1); }

.rgba-blue-grey-light,
.rgba-blue-grey-light:after {
  background-color: rgba(96, 125, 139, 0.3); }

.rgba-blue-grey-strong,
.rgba-blue-grey-strong:after {
  background-color: rgba(96, 125, 139, 0.7); }

.blue-grey.darken-1 {
  background-color: #546e7a !important; }

.blue-grey.darken-2 {
  background-color: #455a64 !important; }

.blue-grey.darken-3 {
  background-color: #37474f !important; }

.blue-grey.darken-4 {
  background-color: #263238 !important; }

.grey.lighten-5 {
  background-color: #fafafa !important; }

.grey.lighten-4 {
  background-color: #f5f5f5 !important; }

.grey.lighten-3 {
  background-color: #eee !important; }

.grey.lighten-2 {
  background-color: #e0e0e0 !important; }

.grey.lighten-1 {
  background-color: #bdbdbd !important; }

.grey {
  background-color: #9e9e9e !important; }

.grey-text {
  color: #9e9e9e !important; }

.rgba-grey-slight,
.rgba-grey-slight:after {
  background-color: rgba(158, 158, 158, 0.1); }

.rgba-grey-light,
.rgba-grey-light:after {
  background-color: rgba(158, 158, 158, 0.3); }

.rgba-grey-strong,
.rgba-grey-strong:after {
  background-color: rgba(158, 158, 158, 0.7); }

.grey.darken-1 {
  background-color: #757575 !important; }

.grey.darken-2 {
  background-color: #616161 !important; }

.grey.darken-3 {
  background-color: #424242 !important; }

.grey.darken-4 {
  background-color: #212121 !important; }

.black {
  background-color: #000 !important; }

.black-text {
  color: #000 !important; }

.rgba-black-slight,
.rgba-black-slight:after {
  background-color: rgba(0, 0, 0, 0.1); }

.rgba-black-light,
.rgba-black-light:after {
  background-color: rgba(0, 0, 0, 0.3); }

.rgba-black-strong,
.rgba-black-strong:after {
  background-color: rgba(0, 0, 0, 0.7); }

.white {
  background-color: #fff !important; }

.white-text {
  color: #fff !important; }

.rgba-white-slight,
.rgba-white-slight:after {
  background-color: rgba(255, 255, 255, 0.1); }

.rgba-white-light,
.rgba-white-light:after {
  background-color: rgba(255, 255, 255, 0.3); }

.rgba-white-strong,
.rgba-white-strong:after {
  background-color: rgba(255, 255, 255, 0.7); }

.rgba-stylish-slight {
  background-color: rgba(62, 69, 81, 0.1); }

.rgba-stylish-light {
  background-color: rgba(62, 69, 81, 0.3); }

.rgba-stylish-strong {
  background-color: rgba(62, 69, 81, 0.7); }

.primary-color, ul.stepper li.active a .circle, ul.stepper li.completed a .circle {
  background-color: #4285f4 !important; }

.primary-color-dark {
  background-color: #0d47a1 !important; }

.secondary-color {
  background-color: #a6c !important; }

.secondary-color-dark {
  background-color: #93c !important; }

.default-color {
  background-color: #2bbbad !important; }

.default-color-dark {
  background-color: #00695c !important; }

.info-color {
  background-color: #33b5e5 !important; }

.info-color-dark {
  background-color: #09c !important; }

.success-color {
  background-color: #00c851 !important; }

.success-color-dark {
  background-color: #007e33 !important; }

.warning-color {
  background-color: #fb3 !important; }

.warning-color-dark {
  background-color: #f80 !important; }

.danger-color, ul.stepper li.warning a .circle {
  background-color: #ff3547 !important; }

.danger-color-dark {
  background-color: #c00 !important; }

.elegant-color {
  background-color: #2e2e2e !important; }

.elegant-color-dark {
  background-color: #212121 !important; }

.stylish-color {
  background-color: #4b515d !important; }

.stylish-color-dark {
  background-color: #3e4551 !important; }

.unique-color {
  background-color: #3f729b !important; }

.unique-color-dark {
  background-color: #1c2331 !important; }

.special-color {
  background-color: #37474f !important; }

.special-color-dark {
  background-color: #263238 !important; }

.purple-gradient {
  background: linear-gradient(40deg, #ff6ec4, #7873f5) !important; }

.peach-gradient {
  background: linear-gradient(40deg, #ffd86f, #fc6262) !important; }

.aqua-gradient {
  background: linear-gradient(40deg, #2096ff, #05ffa3) !important; }

.blue-gradient {
  background: linear-gradient(40deg, #45cafc, #303f9f) !important; }

.purple-gradient-rgba {
  background: linear-gradient(40deg, rgba(255, 110, 196, 0.9), rgba(120, 115, 245, 0.9)) !important; }

.peach-gradient-rgba {
  background: linear-gradient(40deg, rgba(255, 216, 111, 0.9), rgba(252, 98, 98, 0.9)) !important; }

.aqua-gradient-rgba {
  background: linear-gradient(40deg, rgba(32, 150, 255, 0.9), rgba(5, 255, 163, 0.9)) !important; }

.blue-gradient-rgba {
  background: linear-gradient(40deg, rgba(69, 202, 252, 0.9), rgba(48, 63, 159, 0.9)) !important; }

.dark-grey-text {
  color: #4f4f4f !important; }
  .dark-grey-text:hover, .dark-grey-text:focus {
    color: #4f4f4f !important; }

.hoverable {
  box-shadow: none;
  transition: all 0.55s ease-in-out; }
  .hoverable:hover {
    box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    transition: all 0.55s ease-in-out; }

.z-depth-0 {
  box-shadow: none !important; }

.z-depth-1 {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12) !important; }

.z-depth-1-half {
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15) !important; }

.z-depth-2 {
  box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important; }

.z-depth-3 {
  box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19) !important; }

.z-depth-4 {
  box-shadow: 0 16px 28px 0 rgba(0, 0, 0, 0.22), 0 25px 55px 0 rgba(0, 0, 0, 0.21) !important; }

.z-depth-5 {
  box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22) !important; }

.disabled,
:disabled {
  pointer-events: none !important; }

a {
  color: #007bff;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.2s ease-in-out; }
  a:hover {
    color: #0056b3;
    text-decoration: none;
    transition: all 0.2s ease-in-out; }
  a.disabled:hover, a:disabled:hover {
    color: #007bff; }

a:not([href]):not([tabindex]), a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
  color: inherit;
  text-decoration: none; }

.divider-new {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  margin-top: 2.8rem;
  margin-bottom: 2.8rem; }
  .divider-new > h1, .divider-new h2, .divider-new h3, .divider-new h4, .divider-new h5, .divider-new h6 {
    margin-bottom: 0; }
  .divider-new:before, .divider-new:after {
    flex: 1;
    height: 1.5px;
    height: 2px;
    content: "";
    background: #c6c6c6; }
  .divider-new:before {
    margin: 0 0.5rem 0 0; }
  .divider-new:after {
    margin: 0 0 0 0.5rem; }

.img-fluid, .modal-dialog.cascading-modal.modal-avatar .modal-header,
.video-fluid {
  max-width: 100%;
  height: auto; }

.flex-center {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%; }
  .flex-center p {
    margin: 0; }
  .flex-center ul {
    text-align: center; }
    .flex-center ul li {
      margin-bottom: 1rem; }
      .flex-center ul li:last-of-type {
        margin-bottom: 0; }

.hr-light {
  border-top: 1px solid #fff; }

.hr-dark {
  border-top: 1px solid #666; }

.w-responsive {
  width: 75%; }
  @media (max-width: 740px) {
    .w-responsive {
      width: 100%; } }

.collapsible-body {
  display: none; }

.jumbotron {
  background-color: #fff;
  border-radius: 0.125rem;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); }

.bg-primary {
  background-color: #4285f4 !important; }

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #1266f1 !important; }

.border-primary {
  border-color: #4285f4 !important; }

.bg-danger {
  background-color: #ff3547 !important; }

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #ff0219 !important; }

.border-danger {
  border-color: #ff3547 !important; }

.bg-warning {
  background-color: #fb3 !important; }

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #ffaa00 !important; }

.border-warning {
  border-color: #fb3 !important; }

.bg-success {
  background-color: #00c851 !important; }

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #00953c !important; }

.border-success {
  border-color: #00c851 !important; }

.bg-info {
  background-color: #33b5e5 !important; }

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #1a9bcb !important; }

.border-info {
  border-color: #33b5e5 !important; }

.bg-default {
  background-color: #2bbbad !important; }

a.bg-default:hover, a.bg-default:focus,
button.bg-default:hover,
button.bg-default:focus {
  background-color: #219287 !important; }

.border-default {
  border-color: #2bbbad !important; }

.bg-secondary {
  background-color: #a6c !important; }

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #9540bf !important; }

.border-secondary {
  border-color: #a6c !important; }

.bg-dark {
  background-color: #212121 !important; }

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #080808 !important; }

.border-dark {
  border-color: #212121 !important; }

.bg-light {
  background-color: #e0e0e0 !important; }

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #c7c7c7 !important; }

.border-light {
  border-color: #e0e0e0 !important; }

.card-img-100 {
  width: 100px;
  height: 100px; }

.card-img-64 {
  width: 64px;
  height: 64px; }

.mml-1 {
  margin-left: -0.25rem !important; }

.flex-1 {
  flex: 1; }

@font-face {
  font-family: Roboto;
  font-weight: 200;
  src: local(Roboto Thin), url("../font/roboto/Roboto-Thin.eot");
  src: url("../font/roboto/Roboto-Thin.eot?#iefix") format("embedded-opentype"), url("../font/roboto/Roboto-Thin.woff2") format("woff2"), url("../font/roboto/Roboto-Thin.woff") format("woff"), url("../font/roboto/Roboto-Thin.ttf") format("truetype"); }

@font-face {
  font-family: Roboto;
  font-weight: 300;
  src: local(Roboto Light), url("../font/roboto/Roboto-Light.eot");
  src: url("../font/roboto/Roboto-Light.eot?#iefix") format("embedded-opentype"), url("../font/roboto/Roboto-Light.woff2") format("woff2"), url("../font/roboto/Roboto-Light.woff") format("woff"), url("../font/roboto/Roboto-Light.ttf") format("truetype"); }

@font-face {
  font-family: Roboto;
  font-weight: 400;
  src: local(Roboto Regular), url("../font/roboto/Roboto-Regular.eot");
  src: url("../font/roboto/Roboto-Regular.eot?#iefix") format("embedded-opentype"), url("../font/roboto/Roboto-Regular.woff2") format("woff2"), url("../font/roboto/Roboto-Regular.woff") format("woff"), url("../font/roboto/Roboto-Regular.ttf") format("truetype"); }

@font-face {
  font-family: Roboto;
  font-weight: 500;
  src: url("../font/roboto/Roboto-Medium.eot");
  src: url("../font/roboto/Roboto-Medium.eot?#iefix") format("embedded-opentype"), url("../font/roboto/Roboto-Medium.woff2") format("woff2"), url("../font/roboto/Roboto-Medium.woff") format("woff"), url("../font/roboto/Roboto-Medium.ttf") format("truetype"); }

@font-face {
  font-family: Roboto;
  font-weight: 700;
  src: url("../font/roboto/Roboto-Bold.eot");
  src: url("../font/roboto/Roboto-Bold.eot?#iefix") format("embedded-opentype"), url("../font/roboto/Roboto-Bold.woff2") format("woff2"), url("../font/roboto/Roboto-Bold.woff") format("woff"), url("../font/roboto/Roboto-Bold.ttf") format("truetype"); }

body {
  font-family: "Roboto", sans-serif;
  font-weight: 300; }

h1, h2, h3, h4, h5, h6 {
  font-weight: 300; }

.blockquote {
  padding: 0.5rem 1rem;
  border-left: .25rem solid #eceeef; }
  .blockquote.text-right {
    border-right: .25rem solid #eceeef;
    border-left: none; }
  .blockquote .bq-title {
    margin-bottom: 0;
    font-size: 1.5rem;
    font-weight: 400; }
  .blockquote p {
    padding: 1rem 0;
    font-size: 1.1rem; }

.bq-primary {
  border-left: 3px solid #4285f4 !important; }
  .bq-primary .bq-title {
    color: #4285f4 !important; }

.bq-danger {
  border-left: 3px solid #ff3547 !important; }
  .bq-danger .bq-title {
    color: #ff3547 !important; }

.bq-warning {
  border-left: 3px solid #fb3 !important; }
  .bq-warning .bq-title {
    color: #fb3 !important; }

.bq-success {
  border-left: 3px solid #00c851 !important; }
  .bq-success .bq-title {
    color: #00c851 !important; }

.bq-info {
  border-left: 3px solid #33b5e5 !important; }
  .bq-info .bq-title {
    color: #33b5e5 !important; }

.text-primary {
  color: #4285f4 !important; }

a.text-primary:hover, a.text-primary:focus {
  color: #1266f1 !important; }

.text-danger {
  color: #ff3547 !important; }

a.text-danger:hover, a.text-danger:focus {
  color: #ff0219 !important; }

.text-warning {
  color: #fb3 !important; }

a.text-warning:hover, a.text-warning:focus {
  color: #ffaa00 !important; }

.text-success {
  color: #00c851 !important; }

a.text-success:hover, a.text-success:focus {
  color: #00953c !important; }

.text-info {
  color: #33b5e5 !important; }

a.text-info:hover, a.text-info:focus {
  color: #1a9bcb !important; }

.text-default {
  color: #2bbbad !important; }

a.text-default:hover, a.text-default:focus {
  color: #219287 !important; }

.text-secondary {
  color: #a6c !important; }

a.text-secondary:hover, a.text-secondary:focus {
  color: #9540bf !important; }

.text-dark {
  color: #212121 !important; }

a.text-dark:hover, a.text-dark:focus {
  color: #080808 !important; }

.text-light {
  color: #e0e0e0 !important; }

a.text-light:hover, a.text-light:focus {
  color: #c7c7c7 !important; }

.font-small {
  font-size: 0.9rem; }

.view {
  position: relative;
  overflow: hidden;
  cursor: default; }
  .view .mask {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background-attachment: fixed; }
  .view img, .view video {
    position: relative;
    display: block; }
  .view video.video-intro {
    top: 50%;
    left: 50%;
    z-index: -100;
    width: auto;
    min-width: 100%;
    height: auto;
    min-height: 100%;
    transition: 1s opacity;
    transform: translateX(-50%) translateY(-50%); }

.overlay .mask {
  opacity: 0;
  transition: all 0.4s ease-in-out; }
  .overlay .mask:hover {
    opacity: 1; }

.zoom img, .zoom video {
  transition: all 0.2s linear; }

.zoom:hover img, .zoom:hover video {
  transform: scale(1.1); }

.pattern-1 {
  background: url("../img/overlays/01.png");
  background-attachment: fixed; }

.pattern-2 {
  background: url("../img/overlays/02.png");
  background-attachment: fixed; }

.pattern-3 {
  background: url("../img/overlays/03.png");
  background-attachment: fixed; }

.pattern-4 {
  background: url("../img/overlays/04.png");
  background-attachment: fixed; }

.pattern-5 {
  background: url("../img/overlays/05.png");
  background-attachment: fixed; }

.pattern-6 {
  background: url("../img/overlays/06.png");
  background-attachment: fixed; }

.pattern-7 {
  background: url("../img/overlays/07.png");
  background-attachment: fixed; }

.pattern-8 {
  background: url("../img/overlays/08.png");
  background-attachment: fixed; }

.pattern-9 {
  background: url("../img/overlays/09.png");
  background-attachment: fixed; }

/*!
 * Waves v0.7.6
 * http://fian.my.id/Waves
 *
 * Copyright 2014-2018 Alfiana E. Sibuea and other contributors
 * Released under the MIT license
 * https://github.com/fians/Waves/blob/master/LICENSE */
.waves-effect {
  position: relative;
  overflow: hidden;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: transparent; }
  .waves-effect .waves-ripple {
    position: absolute;
    width: 100px;
    height: 100px;
    margin-top: -50px;
    margin-left: -50px;
    pointer-events: none;
    background: rgba(0, 0, 0, 0.2);
    background: radial-gradient(rgba(0, 0, 0, 0.2) 0, rgba(0, 0, 0, 0.3) 40%, rgba(0, 0, 0, 0.4) 50%, rgba(0, 0, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
    border-radius: 50%;
    opacity: 0;
    transition-property: transform, opacity;
    transition: all 0.5s ease-out;
    transform: scale(0) translate(0, 0); }
  .waves-effect.waves-light .waves-ripple {
    background: rgba(255, 255, 255, 0.4);
    background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%); }
  .waves-effect.waves-classic .waves-ripple {
    background: rgba(0, 0, 0, 0.2); }
  .waves-effect.waves-classic.waves-light .waves-ripple {
    background: rgba(255, 255, 255, 0.4); }

.waves-notransition {
  transition: none !important; }

.waves-button,
.waves-circle {
  transform: translateZ(0);
  -webkit-mask-image: -webkit-radial-gradient(circle, #fff 100%, #000 100%); }

.waves-button,
.waves-button:hover,
.waves-button:visited,
.waves-button-input {
  z-index: 1;
  font-size: 1em;
  line-height: 1em;
  color: inherit;
  text-align: center;
  text-decoration: none;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  background-color: rgba(0, 0, 0, 0);
  border: none;
  outline: none; }

.waves-button {
  padding: .85em 1.1em;
  border-radius: .2em; }

.waves-button-input {
  padding: .85em 1.1em;
  margin: 0; }

.waves-input-wrapper {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  border-radius: .2em; }
  .waves-input-wrapper.waves-button {
    padding: 0; }
  .waves-input-wrapper .waves-button-input {
    position: relative;
    top: 0;
    left: 0;
    z-index: 1; }

.waves-circle {
  width: 2.5em;
  height: 2.5em;
  line-height: 2.5em;
  text-align: center;
  border-radius: 50%; }

.waves-float {
  -webkit-mask-image: none;
  box-shadow: 0 1px 1.5px 1px rgba(0, 0, 0, 0.12);
  transition: all 300ms; }
  .waves-float:active {
    box-shadow: 0 8px 20px 1px rgba(0, 0, 0, 0.3); }

.waves-block {
  display: block; }

a.waves-effect, a.waves-light {
  display: inline-block; }

/*!
 * animate.css -http://daneden.me/animate
 * Version - 3.7.0
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2018 Daniel Eden
 */
.animated {
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both; }
  .animated.infinite {
    -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite; }
  .animated.delay-1s {
    -webkit-animation-delay: 1s;
            animation-delay: 1s; }
  .animated.delay-2s {
    -webkit-animation-delay: 2s;
            animation-delay: 2s; }
  .animated.delay-3s {
    -webkit-animation-delay: 3s;
            animation-delay: 3s; }
  .animated.delay-4s {
    -webkit-animation-delay: 4s;
            animation-delay: 4s; }
  .animated.delay-5s {
    -webkit-animation-delay: 5s;
            animation-delay: 5s; }
  .animated.fast {
    -webkit-animation-duration: 800ms;
            animation-duration: 800ms; }
  .animated.faster {
    -webkit-animation-duration: 500ms;
            animation-duration: 500ms; }
  .animated.slow {
    -webkit-animation-duration: 2s;
            animation-duration: 2s; }
  .animated.slower {
    -webkit-animation-duration: 3s;
            animation-duration: 3s; }

@media (prefers-reduced-motion) {
  .animated {
    transition: none !important;
    -webkit-animation: unset !important;
            animation: unset !important; } }

@-webkit-keyframes fadeIn {
  from {
    opacity: 0; }
  to {
    opacity: 1; } }

@keyframes fadeIn {
  from {
    opacity: 0; }
  to {
    opacity: 1; } }

.fadeIn {
  -webkit-animation-name: fadeIn;
          animation-name: fadeIn; }

@-webkit-keyframes fadeInDown {
  from {
    opacity: 0;
    transform: translate3d(0, -100%, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

@keyframes fadeInDown {
  from {
    opacity: 0;
    transform: translate3d(0, -100%, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

.fadeInDown {
  -webkit-animation-name: fadeInDown;
          animation-name: fadeInDown; }

@-webkit-keyframes fadeInLeft {
  from {
    opacity: 0;
    transform: translate3d(-100%, 0, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

@keyframes fadeInLeft {
  from {
    opacity: 0;
    transform: translate3d(-100%, 0, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
          animation-name: fadeInLeft; }

@-webkit-keyframes fadeInRight {
  from {
    opacity: 0;
    transform: translate3d(100%, 0, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

@keyframes fadeInRight {
  from {
    opacity: 0;
    transform: translate3d(100%, 0, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

.fadeInRight {
  -webkit-animation-name: fadeInRight;
          animation-name: fadeInRight; }

@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 100%, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 100%, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

.fadeInUp {
  -webkit-animation-name: fadeInUp;
          animation-name: fadeInUp; }

@-webkit-keyframes fadeOut {
  from {
    opacity: 1; }
  to {
    opacity: 0; } }

@keyframes fadeOut {
  from {
    opacity: 1; }
  to {
    opacity: 0; } }

.fadeOut {
  -webkit-animation-name: fadeOut;
          animation-name: fadeOut; }

@-webkit-keyframes fadeOutDown {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(0, 100%, 0); } }

@keyframes fadeOutDown {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(0, 100%, 0); } }

.fadeOutDown {
  -webkit-animation-name: fadeOutDown;
          animation-name: fadeOutDown; }

@-webkit-keyframes fadeOutLeft {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(-100%, 0, 0); } }

@keyframes fadeOutLeft {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(-100%, 0, 0); } }

.fadeOutLeft {
  -webkit-animation-name: fadeOutLeft;
          animation-name: fadeOutLeft; }

@-webkit-keyframes fadeOutRight {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(100%, 0, 0); } }

@keyframes fadeOutRight {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(100%, 0, 0); } }

.fadeOutRight {
  -webkit-animation-name: fadeOutRight;
          animation-name: fadeOutRight; }

@-webkit-keyframes fadeOutUp {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(0, -100%, 0); } }

@keyframes fadeOutUp {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(0, -100%, 0); } }

.fadeOutUp {
  -webkit-animation-name: fadeOutUp;
          animation-name: fadeOutUp; }

/*!
 * animate.css -http://daneden.me/animate
 * Version - 3.7.0
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2018 Daniel Eden
 */
@-webkit-keyframes bounce {
  from,
  20%,
  53%,
  80%,
  to {
    transform: translate3d(0, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  40%,
  43% {
    transform: translate3d(0, -30px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06); }
  70% {
    transform: translate3d(0, -15px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06); }
  90% {
    transform: translate3d(0, -4px, 0); } }
@keyframes bounce {
  from,
  20%,
  53%,
  80%,
  to {
    transform: translate3d(0, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  40%,
  43% {
    transform: translate3d(0, -30px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06); }
  70% {
    transform: translate3d(0, -15px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06); }
  90% {
    transform: translate3d(0, -4px, 0); } }

.bounce {
  transform-origin: center bottom;
  -webkit-animation-name: bounce;
          animation-name: bounce; }

@-webkit-keyframes flash {
  from,
  50%,
  to {
    opacity: 1; }
  25%,
  75% {
    opacity: 0; } }

@keyframes flash {
  from,
  50%,
  to {
    opacity: 1; }
  25%,
  75% {
    opacity: 0; } }

.flash {
  -webkit-animation-name: flash;
          animation-name: flash; }

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */
@-webkit-keyframes pulse {
  from {
    transform: scale3d(1, 1, 1); }
  50% {
    transform: scale3d(1.05, 1.05, 1.05); }
  to {
    transform: scale3d(1, 1, 1); } }
@keyframes pulse {
  from {
    transform: scale3d(1, 1, 1); }
  50% {
    transform: scale3d(1.05, 1.05, 1.05); }
  to {
    transform: scale3d(1, 1, 1); } }

.pulse {
  -webkit-animation-name: pulse;
          animation-name: pulse; }

@-webkit-keyframes rubberBand {
  from {
    transform: scale3d(1, 1, 1); }
  30% {
    transform: scale3d(1.25, 0.75, 1); }
  40% {
    transform: scale3d(0.75, 1.25, 1); }
  50% {
    transform: scale3d(1.15, 0.85, 1); }
  65% {
    transform: scale3d(0.95, 1.05, 1); }
  75% {
    transform: scale3d(1.05, 0.95, 1); }
  to {
    transform: scale3d(1, 1, 1); } }

@keyframes rubberBand {
  from {
    transform: scale3d(1, 1, 1); }
  30% {
    transform: scale3d(1.25, 0.75, 1); }
  40% {
    transform: scale3d(0.75, 1.25, 1); }
  50% {
    transform: scale3d(1.15, 0.85, 1); }
  65% {
    transform: scale3d(0.95, 1.05, 1); }
  75% {
    transform: scale3d(1.05, 0.95, 1); }
  to {
    transform: scale3d(1, 1, 1); } }

.rubberBand {
  -webkit-animation-name: rubberBand;
          animation-name: rubberBand; }

@-webkit-keyframes shake {
  from,
  to {
    transform: translate3d(0, 0, 0); }
  10%,
  30%,
  50%,
  70%,
  90% {
    transform: translate3d(-10px, 0, 0); }
  20%,
  40%,
  60%,
  80% {
    transform: translate3d(10px, 0, 0); } }

@keyframes shake {
  from,
  to {
    transform: translate3d(0, 0, 0); }
  10%,
  30%,
  50%,
  70%,
  90% {
    transform: translate3d(-10px, 0, 0); }
  20%,
  40%,
  60%,
  80% {
    transform: translate3d(10px, 0, 0); } }

.shake {
  -webkit-animation-name: shake;
          animation-name: shake; }

@-webkit-keyframes headShake {
  0% {
    transform: translateX(0); }
  6.5% {
    transform: translateX(-6px) rotateY(-9deg); }
  18.5% {
    transform: translateX(5px) rotateY(7deg); }
  31.5% {
    transform: translateX(-3px) rotateY(-5deg); }
  43.5% {
    transform: translateX(2px) rotateY(3deg); }
  50% {
    transform: translateX(0); } }

@keyframes headShake {
  0% {
    transform: translateX(0); }
  6.5% {
    transform: translateX(-6px) rotateY(-9deg); }
  18.5% {
    transform: translateX(5px) rotateY(7deg); }
  31.5% {
    transform: translateX(-3px) rotateY(-5deg); }
  43.5% {
    transform: translateX(2px) rotateY(3deg); }
  50% {
    transform: translateX(0); } }

.headShake {
  -webkit-animation-name: headShake;
          animation-name: headShake;
  -webkit-animation-timing-function: ease-in-out;
          animation-timing-function: ease-in-out; }

@-webkit-keyframes swing {
  20% {
    transform: rotate3d(0, 0, 1, 15deg); }
  40% {
    transform: rotate3d(0, 0, 1, -10deg); }
  60% {
    transform: rotate3d(0, 0, 1, 5deg); }
  80% {
    transform: rotate3d(0, 0, 1, -5deg); }
  to {
    transform: rotate3d(0, 0, 1, 0deg); } }

@keyframes swing {
  20% {
    transform: rotate3d(0, 0, 1, 15deg); }
  40% {
    transform: rotate3d(0, 0, 1, -10deg); }
  60% {
    transform: rotate3d(0, 0, 1, 5deg); }
  80% {
    transform: rotate3d(0, 0, 1, -5deg); }
  to {
    transform: rotate3d(0, 0, 1, 0deg); } }

.swing {
  transform-origin: top center;
  -webkit-animation-name: swing;
          animation-name: swing; }

@-webkit-keyframes tada {
  from {
    transform: scale3d(1, 1, 1); }
  10%,
  20% {
    transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg); }
  30%,
  50%,
  70%,
  90% {
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg); }
  40%,
  60%,
  80% {
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg); }
  to {
    transform: scale3d(1, 1, 1); } }

@keyframes tada {
  from {
    transform: scale3d(1, 1, 1); }
  10%,
  20% {
    transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg); }
  30%,
  50%,
  70%,
  90% {
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg); }
  40%,
  60%,
  80% {
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg); }
  to {
    transform: scale3d(1, 1, 1); } }

.tada {
  -webkit-animation-name: tada;
          animation-name: tada; }

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */
@-webkit-keyframes wobble {
  from {
    transform: translate3d(0, 0, 0); }
  15% {
    transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg); }
  30% {
    transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg); }
  45% {
    transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg); }
  60% {
    transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg); }
  75% {
    transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg); }
  to {
    transform: translate3d(0, 0, 0); } }
@keyframes wobble {
  from {
    transform: translate3d(0, 0, 0); }
  15% {
    transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg); }
  30% {
    transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg); }
  45% {
    transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg); }
  60% {
    transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg); }
  75% {
    transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg); }
  to {
    transform: translate3d(0, 0, 0); } }

.wobble {
  -webkit-animation-name: wobble;
          animation-name: wobble; }

@-webkit-keyframes jello {
  from,
  11.1%,
  to {
    transform: translate3d(0, 0, 0); }
  22.2% {
    transform: skewX(-12.5deg) skewY(-12.5deg); }
  33.3% {
    transform: skewX(6.25deg) skewY(6.25deg); }
  44.4% {
    transform: skewX(-3.125deg) skewY(-3.125deg); }
  55.5% {
    transform: skewX(1.5625deg) skewY(1.5625deg); }
  66.6% {
    transform: skewX(-0.78125deg) skewY(-0.78125deg); }
  77.7% {
    transform: skewX(0.39062deg) skewY(0.39062deg); }
  88.8% {
    transform: skewX(-0.19531deg) skewY(-0.19531deg); } }

@keyframes jello {
  from,
  11.1%,
  to {
    transform: translate3d(0, 0, 0); }
  22.2% {
    transform: skewX(-12.5deg) skewY(-12.5deg); }
  33.3% {
    transform: skewX(6.25deg) skewY(6.25deg); }
  44.4% {
    transform: skewX(-3.125deg) skewY(-3.125deg); }
  55.5% {
    transform: skewX(1.5625deg) skewY(1.5625deg); }
  66.6% {
    transform: skewX(-0.78125deg) skewY(-0.78125deg); }
  77.7% {
    transform: skewX(0.39062deg) skewY(0.39062deg); }
  88.8% {
    transform: skewX(-0.19531deg) skewY(-0.19531deg); } }

.jello {
  transform-origin: center;
  -webkit-animation-name: jello;
          animation-name: jello; }

@-webkit-keyframes heartBeat {
  0% {
    transform: scale(1); }
  14% {
    transform: scale(1.3); }
  28% {
    transform: scale(1); }
  42% {
    transform: scale(1.3); }
  70% {
    transform: scale(1); } }

@keyframes heartBeat {
  0% {
    transform: scale(1); }
  14% {
    transform: scale(1.3); }
  28% {
    transform: scale(1); }
  42% {
    transform: scale(1.3); }
  70% {
    transform: scale(1); } }

.heartBeat {
  -webkit-animation-name: heartBeat;
          animation-name: heartBeat;
  -webkit-animation-duration: 1.3s;
          animation-duration: 1.3s;
  -webkit-animation-timing-function: ease-in-out;
          animation-timing-function: ease-in-out; }

@-webkit-keyframes bounceIn {
  from,
  20%,
  40%,
  60%,
  80%,
  to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  0% {
    opacity: 0;
    transform: scale3d(0.3, 0.3, 0.3); }
  20% {
    transform: scale3d(1.1, 1.1, 1.1); }
  40% {
    transform: scale3d(0.9, 0.9, 0.9); }
  60% {
    opacity: 1;
    transform: scale3d(1.03, 1.03, 1.03); }
  80% {
    transform: scale3d(0.97, 0.97, 0.97); }
  to {
    opacity: 1;
    transform: scale3d(1, 1, 1); } }

@keyframes bounceIn {
  from,
  20%,
  40%,
  60%,
  80%,
  to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  0% {
    opacity: 0;
    transform: scale3d(0.3, 0.3, 0.3); }
  20% {
    transform: scale3d(1.1, 1.1, 1.1); }
  40% {
    transform: scale3d(0.9, 0.9, 0.9); }
  60% {
    opacity: 1;
    transform: scale3d(1.03, 1.03, 1.03); }
  80% {
    transform: scale3d(0.97, 0.97, 0.97); }
  to {
    opacity: 1;
    transform: scale3d(1, 1, 1); } }

.bounceIn {
  -webkit-animation-name: bounceIn;
          animation-name: bounceIn;
  -webkit-animation-duration: .75s;
          animation-duration: .75s; }

@-webkit-keyframes bounceInDown {
  from,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  0% {
    opacity: 0;
    transform: translate3d(0, -3000px, 0); }
  60% {
    opacity: 1;
    transform: translate3d(0, 25px, 0); }
  75% {
    transform: translate3d(0, -10px, 0); }
  90% {
    transform: translate3d(0, 5px, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

@keyframes bounceInDown {
  from,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  0% {
    opacity: 0;
    transform: translate3d(0, -3000px, 0); }
  60% {
    opacity: 1;
    transform: translate3d(0, 25px, 0); }
  75% {
    transform: translate3d(0, -10px, 0); }
  90% {
    transform: translate3d(0, 5px, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

.bounceInDown {
  -webkit-animation-name: bounceInDown;
          animation-name: bounceInDown; }

@-webkit-keyframes bounceInLeft {
  from,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  0% {
    opacity: 0;
    transform: translate3d(-3000px, 0, 0); }
  60% {
    opacity: 1;
    transform: translate3d(25px, 0, 0); }
  75% {
    transform: translate3d(-10px, 0, 0); }
  90% {
    transform: translate3d(5px, 0, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

@keyframes bounceInLeft {
  from,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  0% {
    opacity: 0;
    transform: translate3d(-3000px, 0, 0); }
  60% {
    opacity: 1;
    transform: translate3d(25px, 0, 0); }
  75% {
    transform: translate3d(-10px, 0, 0); }
  90% {
    transform: translate3d(5px, 0, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

.bounceInLeft {
  -webkit-animation-name: bounceInLeft;
          animation-name: bounceInLeft; }

@-webkit-keyframes bounceInRight {
  from,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  from {
    opacity: 0;
    transform: translate3d(3000px, 0, 0); }
  60% {
    opacity: 1;
    transform: translate3d(-25px, 0, 0); }
  75% {
    transform: translate3d(10px, 0, 0); }
  90% {
    transform: translate3d(-5px, 0, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

@keyframes bounceInRight {
  from,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  from {
    opacity: 0;
    transform: translate3d(3000px, 0, 0); }
  60% {
    opacity: 1;
    transform: translate3d(-25px, 0, 0); }
  75% {
    transform: translate3d(10px, 0, 0); }
  90% {
    transform: translate3d(-5px, 0, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

.bounceInRight {
  -webkit-animation-name: bounceInRight;
          animation-name: bounceInRight; }

@-webkit-keyframes bounceInUp {
  from,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  from {
    opacity: 0;
    transform: translate3d(0, 3000px, 0); }
  60% {
    opacity: 1;
    transform: translate3d(0, -20px, 0); }
  75% {
    transform: translate3d(0, 10px, 0); }
  90% {
    transform: translate3d(0, -5px, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

@keyframes bounceInUp {
  from,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }
  from {
    opacity: 0;
    transform: translate3d(0, 3000px, 0); }
  60% {
    opacity: 1;
    transform: translate3d(0, -20px, 0); }
  75% {
    transform: translate3d(0, 10px, 0); }
  90% {
    transform: translate3d(0, -5px, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

.bounceInUp {
  -webkit-animation-name: bounceInUp;
          animation-name: bounceInUp; }

@-webkit-keyframes bounceOut {
  20% {
    transform: scale3d(0.9, 0.9, 0.9); }
  50%,
  55% {
    opacity: 1;
    transform: scale3d(1.1, 1.1, 1.1); }
  to {
    opacity: 0;
    transform: scale3d(0.3, 0.3, 0.3); } }

@keyframes bounceOut {
  20% {
    transform: scale3d(0.9, 0.9, 0.9); }
  50%,
  55% {
    opacity: 1;
    transform: scale3d(1.1, 1.1, 1.1); }
  to {
    opacity: 0;
    transform: scale3d(0.3, 0.3, 0.3); } }

.bounceOut {
  -webkit-animation-name: bounceOut;
          animation-name: bounceOut;
  -webkit-animation-duration: .75s;
          animation-duration: .75s; }

@-webkit-keyframes bounceOutDown {
  20% {
    transform: translate3d(0, 10px, 0); }
  40%,
  45% {
    opacity: 1;
    transform: translate3d(0, -20px, 0); }
  to {
    opacity: 0;
    transform: translate3d(0, 2000px, 0); } }

@keyframes bounceOutDown {
  20% {
    transform: translate3d(0, 10px, 0); }
  40%,
  45% {
    opacity: 1;
    transform: translate3d(0, -20px, 0); }
  to {
    opacity: 0;
    transform: translate3d(0, 2000px, 0); } }

.bounceOutDown {
  -webkit-animation-name: bounceOutDown;
          animation-name: bounceOutDown; }

@-webkit-keyframes bounceOutLeft {
  20% {
    opacity: 1;
    transform: translate3d(20px, 0, 0); }
  to {
    opacity: 0;
    transform: translate3d(-2000px, 0, 0); } }

@keyframes bounceOutLeft {
  20% {
    opacity: 1;
    transform: translate3d(20px, 0, 0); }
  to {
    opacity: 0;
    transform: translate3d(-2000px, 0, 0); } }

.bounceOutLeft {
  -webkit-animation-name: bounceOutLeft;
          animation-name: bounceOutLeft; }

@-webkit-keyframes bounceOutRight {
  20% {
    opacity: 1;
    transform: translate3d(-20px, 0, 0); }
  to {
    opacity: 0;
    transform: translate3d(2000px, 0, 0); } }

@keyframes bounceOutRight {
  20% {
    opacity: 1;
    transform: translate3d(-20px, 0, 0); }
  to {
    opacity: 0;
    transform: translate3d(2000px, 0, 0); } }

.bounceOutRight {
  -webkit-animation-name: bounceOutRight;
          animation-name: bounceOutRight; }

@-webkit-keyframes bounceOutUp {
  20% {
    transform: translate3d(0, -10px, 0); }
  40%,
  45% {
    opacity: 1;
    transform: translate3d(0, 20px, 0); }
  to {
    opacity: 0;
    transform: translate3d(0, -2000px, 0); } }

@keyframes bounceOutUp {
  20% {
    transform: translate3d(0, -10px, 0); }
  40%,
  45% {
    opacity: 1;
    transform: translate3d(0, 20px, 0); }
  to {
    opacity: 0;
    transform: translate3d(0, -2000px, 0); } }

.bounceOutUp {
  -webkit-animation-name: bounceOutUp;
          animation-name: bounceOutUp; }

@-webkit-keyframes fadeInDownBig {
  from {
    opacity: 0;
    transform: translate3d(0, -2000px, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

@keyframes fadeInDownBig {
  from {
    opacity: 0;
    transform: translate3d(0, -2000px, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

.fadeInDownBig {
  -webkit-animation-name: fadeInDownBig;
          animation-name: fadeInDownBig; }

@-webkit-keyframes fadeInLeftBig {
  from {
    opacity: 0;
    transform: translate3d(-2000px, 0, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

@keyframes fadeInLeftBig {
  from {
    opacity: 0;
    transform: translate3d(-2000px, 0, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

.fadeInLeftBig {
  -webkit-animation-name: fadeInLeftBig;
          animation-name: fadeInLeftBig; }

@-webkit-keyframes fadeInRightBig {
  from {
    opacity: 0;
    transform: translate3d(2000px, 0, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

@keyframes fadeInRightBig {
  from {
    opacity: 0;
    transform: translate3d(2000px, 0, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

.fadeInRightBig {
  -webkit-animation-name: fadeInRightBig;
          animation-name: fadeInRightBig; }

@-webkit-keyframes fadeInUpBig {
  from {
    opacity: 0;
    transform: translate3d(0, 2000px, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

@keyframes fadeInUpBig {
  from {
    opacity: 0;
    transform: translate3d(0, 2000px, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

.fadeInUpBig {
  -webkit-animation-name: fadeInUpBig;
          animation-name: fadeInUpBig; }

@-webkit-keyframes fadeOutDownBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(0, 2000px, 0); } }

@keyframes fadeOutDownBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(0, 2000px, 0); } }

.fadeOutDownBig {
  -webkit-animation-name: fadeOutDownBig;
          animation-name: fadeOutDownBig; }

@-webkit-keyframes fadeOutLeftBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(-2000px, 0, 0); } }

@keyframes fadeOutLeftBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(-2000px, 0, 0); } }

.fadeOutLeftBig {
  -webkit-animation-name: fadeOutLeftBig;
          animation-name: fadeOutLeftBig; }

@-webkit-keyframes fadeOutRightBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(2000px, 0, 0); } }

@keyframes fadeOutRightBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(2000px, 0, 0); } }

.fadeOutRightBig {
  -webkit-animation-name: fadeOutRightBig;
          animation-name: fadeOutRightBig; }

@-webkit-keyframes fadeOutUpBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(0, -2000px, 0); } }

@keyframes fadeOutUpBig {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(0, -2000px, 0); } }

.fadeOutUpBig {
  -webkit-animation-name: fadeOutUpBig;
          animation-name: fadeOutUpBig; }

@-webkit-keyframes flip {
  from {
    transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out; }
  40% {
    transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out; }
  50% {
    transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in; }
  80% {
    transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in; }
  to {
    transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in; } }

@keyframes flip {
  from {
    transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out; }
  40% {
    transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out; }
  50% {
    transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in; }
  80% {
    transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in; }
  to {
    transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in; } }

.flip {
  -webkit-backface-visibility: visible;
          backface-visibility: visible;
  -webkit-animation-name: flip;
          animation-name: flip; }

@-webkit-keyframes flipInX {
  from {
    opacity: 0;
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in; }
  40% {
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in; }
  60% {
    opacity: 1;
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg); }
  80% {
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg); }
  to {
    transform: perspective(400px); } }

@keyframes flipInX {
  from {
    opacity: 0;
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in; }
  40% {
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in; }
  60% {
    opacity: 1;
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg); }
  80% {
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg); }
  to {
    transform: perspective(400px); } }

.flipInX {
  -webkit-backface-visibility: visible;
          backface-visibility: visible;
  -webkit-animation-name: flipInX;
          animation-name: flipInX; }

@-webkit-keyframes flipInY {
  from {
    opacity: 0;
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in; }
  40% {
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in; }
  60% {
    opacity: 1;
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg); }
  80% {
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg); }
  to {
    transform: perspective(400px); } }

@keyframes flipInY {
  from {
    opacity: 0;
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in; }
  40% {
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in; }
  60% {
    opacity: 1;
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg); }
  80% {
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg); }
  to {
    transform: perspective(400px); } }

.flipInY {
  -webkit-backface-visibility: visible;
          backface-visibility: visible;
  -webkit-animation-name: flipInY;
          animation-name: flipInY; }

@-webkit-keyframes flipOutX {
  from {
    transform: perspective(400px); }
  30% {
    opacity: 1;
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg); }
  to {
    opacity: 0;
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg); } }

@keyframes flipOutX {
  from {
    transform: perspective(400px); }
  30% {
    opacity: 1;
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg); }
  to {
    opacity: 0;
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg); } }

.flipOutX {
  -webkit-animation-name: flipOutX;
          animation-name: flipOutX;
  -webkit-animation-duration: .75s;
          animation-duration: .75s;
  -webkit-backface-visibility: visible;
          backface-visibility: visible; }

@-webkit-keyframes flipOutY {
  from {
    transform: perspective(400px); }
  30% {
    opacity: 1;
    transform: perspective(400px) rotate3d(0, 1, 0, -15deg); }
  to {
    opacity: 0;
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg); } }

@keyframes flipOutY {
  from {
    transform: perspective(400px); }
  30% {
    opacity: 1;
    transform: perspective(400px) rotate3d(0, 1, 0, -15deg); }
  to {
    opacity: 0;
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg); } }

.flipOutY {
  -webkit-animation-name: flipOutY;
          animation-name: flipOutY;
  -webkit-animation-duration: .75s;
          animation-duration: .75s;
  -webkit-backface-visibility: visible;
          backface-visibility: visible; }

@-webkit-keyframes lightSpeedIn {
  from {
    opacity: 0;
    transform: translate3d(100%, 0, 0) skewX(-30deg); }
  60% {
    opacity: 1;
    transform: skewX(20deg); }
  80% {
    transform: skewX(-5deg); }
  to {
    transform: translate3d(0, 0, 0); } }

@keyframes lightSpeedIn {
  from {
    opacity: 0;
    transform: translate3d(100%, 0, 0) skewX(-30deg); }
  60% {
    opacity: 1;
    transform: skewX(20deg); }
  80% {
    transform: skewX(-5deg); }
  to {
    transform: translate3d(0, 0, 0); } }

.lightSpeedIn {
  -webkit-animation-name: lightSpeedIn;
          animation-name: lightSpeedIn;
  -webkit-animation-timing-function: ease-out;
          animation-timing-function: ease-out; }

@-webkit-keyframes lightSpeedOut {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(100%, 0, 0) skewX(30deg); } }

@keyframes lightSpeedOut {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(100%, 0, 0) skewX(30deg); } }

.lightSpeedOut {
  -webkit-animation-name: lightSpeedOut;
          animation-name: lightSpeedOut;
  -webkit-animation-timing-function: ease-in;
          animation-timing-function: ease-in; }

@-webkit-keyframes rotateIn {
  from {
    opacity: 0;
    transform: rotate3d(0, 0, 1, -200deg);
    transform-origin: center; }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
    transform-origin: center; } }

@keyframes rotateIn {
  from {
    opacity: 0;
    transform: rotate3d(0, 0, 1, -200deg);
    transform-origin: center; }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
    transform-origin: center; } }

.rotateIn {
  -webkit-animation-name: rotateIn;
          animation-name: rotateIn; }

@-webkit-keyframes rotateInDownLeft {
  from {
    opacity: 0;
    transform: rotate3d(0, 0, 1, -45deg);
    transform-origin: left bottom; }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
    transform-origin: left bottom; } }

@keyframes rotateInDownLeft {
  from {
    opacity: 0;
    transform: rotate3d(0, 0, 1, -45deg);
    transform-origin: left bottom; }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
    transform-origin: left bottom; } }

.rotateInDownLeft {
  -webkit-animation-name: rotateInDownLeft;
          animation-name: rotateInDownLeft; }

@-webkit-keyframes rotateInDownRight {
  from {
    opacity: 0;
    transform: rotate3d(0, 0, 1, 45deg);
    transform-origin: right bottom; }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
    transform-origin: right bottom; } }

@keyframes rotateInDownRight {
  from {
    opacity: 0;
    transform: rotate3d(0, 0, 1, 45deg);
    transform-origin: right bottom; }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
    transform-origin: right bottom; } }

.rotateInDownRight {
  -webkit-animation-name: rotateInDownRight;
          animation-name: rotateInDownRight; }

@-webkit-keyframes rotateInUpLeft {
  from {
    opacity: 0;
    transform: rotate3d(0, 0, 1, 45deg);
    transform-origin: left bottom; }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
    transform-origin: left bottom; } }

@keyframes rotateInUpLeft {
  from {
    opacity: 0;
    transform: rotate3d(0, 0, 1, 45deg);
    transform-origin: left bottom; }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
    transform-origin: left bottom; } }

.rotateInUpLeft {
  -webkit-animation-name: rotateInUpLeft;
          animation-name: rotateInUpLeft; }

@-webkit-keyframes rotateInUpRight {
  from {
    opacity: 0;
    transform: rotate3d(0, 0, 1, -90deg);
    transform-origin: right bottom; }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
    transform-origin: right bottom; } }

@keyframes rotateInUpRight {
  from {
    opacity: 0;
    transform: rotate3d(0, 0, 1, -90deg);
    transform-origin: right bottom; }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
    transform-origin: right bottom; } }

.rotateInUpRight {
  -webkit-animation-name: rotateInUpRight;
          animation-name: rotateInUpRight; }

@-webkit-keyframes rotateOut {
  from {
    opacity: 1;
    transform-origin: center; }
  to {
    opacity: 0;
    transform: rotate3d(0, 0, 1, 200deg);
    transform-origin: center; } }

@keyframes rotateOut {
  from {
    opacity: 1;
    transform-origin: center; }
  to {
    opacity: 0;
    transform: rotate3d(0, 0, 1, 200deg);
    transform-origin: center; } }

.rotateOut {
  -webkit-animation-name: rotateOut;
          animation-name: rotateOut; }

@-webkit-keyframes rotateOutDownLeft {
  from {
    opacity: 1;
    transform-origin: left bottom; }
  to {
    opacity: 0;
    transform: rotate3d(0, 0, 1, 45deg);
    transform-origin: left bottom; } }

@keyframes rotateOutDownLeft {
  from {
    opacity: 1;
    transform-origin: left bottom; }
  to {
    opacity: 0;
    transform: rotate3d(0, 0, 1, 45deg);
    transform-origin: left bottom; } }

.rotateOutDownLeft {
  -webkit-animation-name: rotateOutDownLeft;
          animation-name: rotateOutDownLeft; }

@-webkit-keyframes rotateOutDownRight {
  from {
    opacity: 1;
    transform-origin: right bottom; }
  to {
    opacity: 0;
    transform: rotate3d(0, 0, 1, -45deg);
    transform-origin: right bottom; } }

@keyframes rotateOutDownRight {
  from {
    opacity: 1;
    transform-origin: right bottom; }
  to {
    opacity: 0;
    transform: rotate3d(0, 0, 1, -45deg);
    transform-origin: right bottom; } }

.rotateOutDownRight {
  -webkit-animation-name: rotateOutDownRight;
          animation-name: rotateOutDownRight; }

@-webkit-keyframes rotateOutUpLeft {
  from {
    opacity: 1;
    transform-origin: left bottom; }
  to {
    opacity: 0;
    transform: rotate3d(0, 0, 1, -45deg);
    transform-origin: left bottom; } }

@keyframes rotateOutUpLeft {
  from {
    opacity: 1;
    transform-origin: left bottom; }
  to {
    opacity: 0;
    transform: rotate3d(0, 0, 1, -45deg);
    transform-origin: left bottom; } }

.rotateOutUpLeft {
  -webkit-animation-name: rotateOutUpLeft;
          animation-name: rotateOutUpLeft; }

@-webkit-keyframes rotateOutUpRight {
  from {
    opacity: 1;
    transform-origin: right bottom; }
  to {
    opacity: 0;
    transform: rotate3d(0, 0, 1, 90deg);
    transform-origin: right bottom; } }

@keyframes rotateOutUpRight {
  from {
    opacity: 1;
    transform-origin: right bottom; }
  to {
    opacity: 0;
    transform: rotate3d(0, 0, 1, 90deg);
    transform-origin: right bottom; } }

.rotateOutUpRight {
  -webkit-animation-name: rotateOutUpRight;
          animation-name: rotateOutUpRight; }

@-webkit-keyframes hinge {
  0% {
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out; }
  20%,
  60% {
    transform: rotate3d(0, 0, 1, 80deg);
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out; }
  40%,
  80% {
    opacity: 1;
    transform: rotate3d(0, 0, 1, 60deg);
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out; }
  to {
    opacity: 0;
    transform: translate3d(0, 700px, 0); } }

@keyframes hinge {
  0% {
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out; }
  20%,
  60% {
    transform: rotate3d(0, 0, 1, 80deg);
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out; }
  40%,
  80% {
    opacity: 1;
    transform: rotate3d(0, 0, 1, 60deg);
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out; }
  to {
    opacity: 0;
    transform: translate3d(0, 700px, 0); } }

.hinge {
  -webkit-animation-name: hinge;
          animation-name: hinge;
  -webkit-animation-duration: 2s;
          animation-duration: 2s; }

@-webkit-keyframes jackInTheBox {
  from {
    opacity: 0;
    transform: scale(0.1) rotate(30deg);
    transform-origin: center bottom; }
  50% {
    transform: rotate(-10deg); }
  70% {
    transform: rotate(3deg); }
  to {
    opacity: 1;
    transform: scale(1); } }

@keyframes jackInTheBox {
  from {
    opacity: 0;
    transform: scale(0.1) rotate(30deg);
    transform-origin: center bottom; }
  50% {
    transform: rotate(-10deg); }
  70% {
    transform: rotate(3deg); }
  to {
    opacity: 1;
    transform: scale(1); } }

.jackInTheBox {
  -webkit-animation-name: jackInTheBox;
          animation-name: jackInTheBox; }

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */
@-webkit-keyframes rollIn {
  from {
    opacity: 0;
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }
@keyframes rollIn {
  from {
    opacity: 0;
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

.rollIn {
  -webkit-animation-name: rollIn;
          animation-name: rollIn; }

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */
@-webkit-keyframes rollOut {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg); } }
@keyframes rollOut {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg); } }

.rollOut {
  -webkit-animation-name: rollOut;
          animation-name: rollOut; }

@-webkit-keyframes zoomIn {
  from {
    opacity: 0;
    transform: scale3d(0.3, 0.3, 0.3); }
  50% {
    opacity: 1; } }

@keyframes zoomIn {
  from {
    opacity: 0;
    transform: scale3d(0.3, 0.3, 0.3); }
  50% {
    opacity: 1; } }

.zoomIn {
  -webkit-animation-name: zoomIn;
          animation-name: zoomIn; }

@-webkit-keyframes zoomInDown {
  from {
    opacity: 0;
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

@keyframes zoomInDown {
  from {
    opacity: 0;
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

.zoomInDown {
  -webkit-animation-name: zoomInDown;
          animation-name: zoomInDown; }

@-webkit-keyframes zoomInLeft {
  from {
    opacity: 0;
    transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

@keyframes zoomInLeft {
  from {
    opacity: 0;
    transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

.zoomInLeft {
  -webkit-animation-name: zoomInLeft;
          animation-name: zoomInLeft; }

@-webkit-keyframes zoomInRight {
  from {
    opacity: 0;
    transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

@keyframes zoomInRight {
  from {
    opacity: 0;
    transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

.zoomInRight {
  -webkit-animation-name: zoomInRight;
          animation-name: zoomInRight; }

@-webkit-keyframes zoomInUp {
  from {
    opacity: 0;
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

@keyframes zoomInUp {
  from {
    opacity: 0;
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  60% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

.zoomInUp {
  -webkit-animation-name: zoomInUp;
          animation-name: zoomInUp; }

@-webkit-keyframes zoomOut {
  from {
    opacity: 1; }
  50% {
    opacity: 0;
    transform: scale3d(0.3, 0.3, 0.3); }
  to {
    opacity: 0; } }

@keyframes zoomOut {
  from {
    opacity: 1; }
  50% {
    opacity: 0;
    transform: scale3d(0.3, 0.3, 0.3); }
  to {
    opacity: 0; } }

.zoomOut {
  -webkit-animation-name: zoomOut;
          animation-name: zoomOut; }

@-webkit-keyframes zoomOutDown {
  40% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  to {
    opacity: 0;
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

@keyframes zoomOutDown {
  40% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  to {
    opacity: 0;
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

.zoomOutDown {
  -webkit-animation-name: zoomOutDown;
          animation-name: zoomOutDown; }

@-webkit-keyframes zoomOutLeft {
  40% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0); }
  to {
    opacity: 0;
    transform: scale(0.1) translate3d(-2000px, 0, 0);
    transform-origin: left center; } }

@keyframes zoomOutLeft {
  40% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0); }
  to {
    opacity: 0;
    transform: scale(0.1) translate3d(-2000px, 0, 0);
    transform-origin: left center; } }

.zoomOutLeft {
  -webkit-animation-name: zoomOutLeft;
          animation-name: zoomOutLeft; }

@-webkit-keyframes zoomOutRight {
  40% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0); }
  to {
    opacity: 0;
    transform: scale(0.1) translate3d(2000px, 0, 0);
    transform-origin: right center; } }

@keyframes zoomOutRight {
  40% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0); }
  to {
    opacity: 0;
    transform: scale(0.1) translate3d(2000px, 0, 0);
    transform-origin: right center; } }

.zoomOutRight {
  -webkit-animation-name: zoomOutRight;
          animation-name: zoomOutRight; }

@-webkit-keyframes zoomOutUp {
  40% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  to {
    opacity: 0;
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

@keyframes zoomOutUp {
  40% {
    opacity: 1;
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }
  to {
    opacity: 0;
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1); } }

.zoomOutUp {
  -webkit-animation-name: zoomOutUp;
          animation-name: zoomOutUp; }

@-webkit-keyframes slideInDown {
  from {
    visibility: visible;
    transform: translate3d(0, -100%, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

@keyframes slideInDown {
  from {
    visibility: visible;
    transform: translate3d(0, -100%, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

.slideInDown {
  -webkit-animation-name: slideInDown;
          animation-name: slideInDown; }

@-webkit-keyframes slideInLeft {
  from {
    visibility: visible;
    transform: translate3d(-100%, 0, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

@keyframes slideInLeft {
  from {
    visibility: visible;
    transform: translate3d(-100%, 0, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

.slideInLeft {
  -webkit-animation-name: slideInLeft;
          animation-name: slideInLeft; }

@-webkit-keyframes slideInRight {
  from {
    visibility: visible;
    transform: translate3d(100%, 0, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

@keyframes slideInRight {
  from {
    visibility: visible;
    transform: translate3d(100%, 0, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

.slideInRight {
  -webkit-animation-name: slideInRight;
          animation-name: slideInRight; }

@-webkit-keyframes slideInUp {
  from {
    visibility: visible;
    transform: translate3d(0, 100%, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

@keyframes slideInUp {
  from {
    visibility: visible;
    transform: translate3d(0, 100%, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

.slideInUp {
  -webkit-animation-name: slideInUp;
          animation-name: slideInUp; }

@-webkit-keyframes slideOutDown {
  from {
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    transform: translate3d(0, 100%, 0); } }

@keyframes slideOutDown {
  from {
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    transform: translate3d(0, 100%, 0); } }

.slideOutDown {
  -webkit-animation-name: slideOutDown;
          animation-name: slideOutDown; }

@-webkit-keyframes slideOutLeft {
  from {
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    transform: translate3d(-100%, 0, 0); } }

@keyframes slideOutLeft {
  from {
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    transform: translate3d(-100%, 0, 0); } }

.slideOutLeft {
  -webkit-animation-name: slideOutLeft;
          animation-name: slideOutLeft; }

@-webkit-keyframes slideOutRight {
  from {
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    transform: translate3d(100%, 0, 0); } }

@keyframes slideOutRight {
  from {
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    transform: translate3d(100%, 0, 0); } }

.slideOutRight {
  -webkit-animation-name: slideOutRight;
          animation-name: slideOutRight; }

@-webkit-keyframes slideOutUp {
  from {
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    transform: translate3d(0, -100%, 0); } }

@keyframes slideOutUp {
  from {
    transform: translate3d(0, 0, 0); }
  to {
    visibility: hidden;
    transform: translate3d(0, -100%, 0); } }

.slideOutUp {
  -webkit-animation-name: slideOutUp;
          animation-name: slideOutUp; }

.btn {
  margin: 0.375rem;
  color: inherit;
  text-transform: uppercase;
  word-wrap: break-word;
  white-space: normal;
  cursor: pointer;
  border: 0;
  border-radius: 0.125rem;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  padding: 0.84rem 2.14rem;
  font-size: 0.81rem; }
  .btn:hover, .btn:focus, .btn:active {
    outline: 0;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn.btn-block {
    margin: inherit; }
  .btn .fas.right,
  .btn .fab.right,
  .btn .far.right {
    margin-left: 0.3rem; }
  .btn .fas.left,
  .btn .fab.left,
  .btn .far.left {
    margin-right: 0.3rem; }
  .btn.btn-lg {
    padding: 1rem 2.4rem;
    font-size: 0.94rem; }
  .btn.btn-md {
    padding: 0.7rem 1.6rem;
    font-size: 0.7rem; }
  .btn.btn-sm {
    padding: 0.5rem 1.6rem;
    font-size: 0.64rem; }
  .btn.disabled:hover, .btn.disabled:focus, .btn.disabled:active, .btn:disabled:hover, .btn:disabled:focus, .btn:disabled:active {
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); }
  .btn[class*="btn-outline-"] {
    padding-top: 0.7rem;
    padding-bottom: 0.7rem; }
    .btn[class*="btn-outline-"].btn-lg {
      padding-top: 0.88rem;
      padding-bottom: 0.88rem; }
    .btn[class*="btn-outline-"].btn-md {
      padding-top: 0.58rem;
      padding-bottom: 0.58rem; }
    .btn[class*="btn-outline-"].btn-sm {
      padding-top: 0.38rem;
      padding-bottom: 0.38rem; }

.btn-link {
  color: #000;
  background-color: transparent;
  box-shadow: none; }
  .btn-link:hover, .btn-link:focus, .btn-link:active {
    color: #000;
    background-color: transparent;
    box-shadow: none; }

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -0.375rem; }

.btn-primary {
  color: #fff;
  background-color: #4285f4 !important; }
  .btn-primary:hover {
    color: #fff;
    background-color: #5a95f5; }
  .btn-primary:focus, .btn-primary.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-primary:focus, .btn-primary:active, .btn-primary.active {
    background-color: #0b51c5; }
  .btn-primary.dropdown-toggle {
    background-color: #4285f4 !important; }
    .btn-primary.dropdown-toggle:hover, .btn-primary.dropdown-toggle:focus {
      background-color: #5a95f5 !important; }
  .btn-primary:not([disabled]):not(.disabled):active, .btn-primary:not([disabled]):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    background-color: #0b51c5 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-primary:not([disabled]):not(.disabled):active:focus, .btn-primary:not([disabled]):not(.disabled).active:focus,
  .show > .btn-primary.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.primary-ic {
  color: #4285f4 !important; }
  .primary-ic:hover, .primary-ic:focus {
    color: #4285f4; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-primary {
  color: #fff; }

.btn-outline-primary {
  color: #4285f4 !important;
  background-color: transparent !important;
  border: 2px solid #4285f4 !important; }
  .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active, .btn-outline-primary:active:focus, .btn-outline-primary.active {
    color: #4285f4 !important;
    background-color: transparent !important;
    border-color: #4285f4 !important; }
  .btn-outline-primary:not([disabled]):not(.disabled):active, .btn-outline-primary:not([disabled]):not(.disabled).active,
  .show > .btn-outline-primary.dropdown-toggle {
    background-color: transparent !important;
    border-color: #4285f4 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-primary:not([disabled]):not(.disabled):active:focus, .btn-outline-primary:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-primary.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-danger {
  color: #fff;
  background-color: #ff3547 !important; }
  .btn-danger:hover {
    color: #fff;
    background-color: #ff4f5e; }
  .btn-danger:focus, .btn-danger.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-danger:focus, .btn-danger:active, .btn-danger.active {
    background-color: #ce0012; }
  .btn-danger.dropdown-toggle {
    background-color: #ff3547 !important; }
    .btn-danger.dropdown-toggle:hover, .btn-danger.dropdown-toggle:focus {
      background-color: #ff4f5e !important; }
  .btn-danger:not([disabled]):not(.disabled):active, .btn-danger:not([disabled]):not(.disabled).active,
  .show > .btn-danger.dropdown-toggle {
    background-color: #ce0012 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-danger:not([disabled]):not(.disabled):active:focus, .btn-danger:not([disabled]):not(.disabled).active:focus,
  .show > .btn-danger.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.danger-ic {
  color: #ff3547 !important; }
  .danger-ic:hover, .danger-ic:focus {
    color: #ff3547; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-danger {
  color: #fff; }

.btn-outline-danger {
  color: #ff3547 !important;
  background-color: transparent !important;
  border: 2px solid #ff3547 !important; }
  .btn-outline-danger:hover, .btn-outline-danger:focus, .btn-outline-danger:active, .btn-outline-danger:active:focus, .btn-outline-danger.active {
    color: #ff3547 !important;
    background-color: transparent !important;
    border-color: #ff3547 !important; }
  .btn-outline-danger:not([disabled]):not(.disabled):active, .btn-outline-danger:not([disabled]):not(.disabled).active,
  .show > .btn-outline-danger.dropdown-toggle {
    background-color: transparent !important;
    border-color: #ff3547 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-danger:not([disabled]):not(.disabled):active:focus, .btn-outline-danger:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-danger.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-warning {
  color: #fff;
  background-color: #fb3 !important; }
  .btn-warning:hover {
    color: #fff;
    background-color: #ffc44d; }
  .btn-warning:focus, .btn-warning.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-warning:focus, .btn-warning:active, .btn-warning.active {
    background-color: #cc8800; }
  .btn-warning.dropdown-toggle {
    background-color: #fb3 !important; }
    .btn-warning.dropdown-toggle:hover, .btn-warning.dropdown-toggle:focus {
      background-color: #ffc44d !important; }
  .btn-warning:not([disabled]):not(.disabled):active, .btn-warning:not([disabled]):not(.disabled).active,
  .show > .btn-warning.dropdown-toggle {
    background-color: #cc8800 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-warning:not([disabled]):not(.disabled):active:focus, .btn-warning:not([disabled]):not(.disabled).active:focus,
  .show > .btn-warning.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.warning-ic {
  color: #fb3 !important; }
  .warning-ic:hover, .warning-ic:focus {
    color: #fb3; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-warning {
  color: #fff; }

.btn-outline-warning {
  color: #fb3 !important;
  background-color: transparent !important;
  border: 2px solid #fb3 !important; }
  .btn-outline-warning:hover, .btn-outline-warning:focus, .btn-outline-warning:active, .btn-outline-warning:active:focus, .btn-outline-warning.active {
    color: #fb3 !important;
    background-color: transparent !important;
    border-color: #fb3 !important; }
  .btn-outline-warning:not([disabled]):not(.disabled):active, .btn-outline-warning:not([disabled]):not(.disabled).active,
  .show > .btn-outline-warning.dropdown-toggle {
    background-color: transparent !important;
    border-color: #fb3 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-warning:not([disabled]):not(.disabled):active:focus, .btn-outline-warning:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-warning.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-success {
  color: #fff;
  background-color: #00c851 !important; }
  .btn-success:hover {
    color: #fff;
    background-color: #00e25b; }
  .btn-success:focus, .btn-success.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-success:focus, .btn-success:active, .btn-success.active {
    background-color: #006228; }
  .btn-success.dropdown-toggle {
    background-color: #00c851 !important; }
    .btn-success.dropdown-toggle:hover, .btn-success.dropdown-toggle:focus {
      background-color: #00e25b !important; }
  .btn-success:not([disabled]):not(.disabled):active, .btn-success:not([disabled]):not(.disabled).active,
  .show > .btn-success.dropdown-toggle {
    background-color: #006228 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-success:not([disabled]):not(.disabled):active:focus, .btn-success:not([disabled]):not(.disabled).active:focus,
  .show > .btn-success.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.success-ic {
  color: #00c851 !important; }
  .success-ic:hover, .success-ic:focus {
    color: #00c851; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-success {
  color: #fff; }

.btn-outline-success {
  color: #00c851 !important;
  background-color: transparent !important;
  border: 2px solid #00c851 !important; }
  .btn-outline-success:hover, .btn-outline-success:focus, .btn-outline-success:active, .btn-outline-success:active:focus, .btn-outline-success.active {
    color: #00c851 !important;
    background-color: transparent !important;
    border-color: #00c851 !important; }
  .btn-outline-success:not([disabled]):not(.disabled):active, .btn-outline-success:not([disabled]):not(.disabled).active,
  .show > .btn-outline-success.dropdown-toggle {
    background-color: transparent !important;
    border-color: #00c851 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-success:not([disabled]):not(.disabled):active:focus, .btn-outline-success:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-success.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-info {
  color: #fff;
  background-color: #33b5e5 !important; }
  .btn-info:hover {
    color: #fff;
    background-color: #4abde8; }
  .btn-info:focus, .btn-info.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-info:focus, .btn-info:active, .btn-info.active {
    background-color: #14799e; }
  .btn-info.dropdown-toggle {
    background-color: #33b5e5 !important; }
    .btn-info.dropdown-toggle:hover, .btn-info.dropdown-toggle:focus {
      background-color: #4abde8 !important; }
  .btn-info:not([disabled]):not(.disabled):active, .btn-info:not([disabled]):not(.disabled).active,
  .show > .btn-info.dropdown-toggle {
    background-color: #14799e !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-info:not([disabled]):not(.disabled):active:focus, .btn-info:not([disabled]):not(.disabled).active:focus,
  .show > .btn-info.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.info-ic {
  color: #33b5e5 !important; }
  .info-ic:hover, .info-ic:focus {
    color: #33b5e5; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-info {
  color: #fff; }

.btn-outline-info {
  color: #33b5e5 !important;
  background-color: transparent !important;
  border: 2px solid #33b5e5 !important; }
  .btn-outline-info:hover, .btn-outline-info:focus, .btn-outline-info:active, .btn-outline-info:active:focus, .btn-outline-info.active {
    color: #33b5e5 !important;
    background-color: transparent !important;
    border-color: #33b5e5 !important; }
  .btn-outline-info:not([disabled]):not(.disabled):active, .btn-outline-info:not([disabled]):not(.disabled).active,
  .show > .btn-outline-info.dropdown-toggle {
    background-color: transparent !important;
    border-color: #33b5e5 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-info:not([disabled]):not(.disabled):active:focus, .btn-outline-info:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-info.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-default {
  color: #fff;
  background-color: #2bbbad !important; }
  .btn-default:hover {
    color: #fff;
    background-color: #30cfc0; }
  .btn-default:focus, .btn-default.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-default:focus, .btn-default:active, .btn-default.active {
    background-color: #186860; }
  .btn-default.dropdown-toggle {
    background-color: #2bbbad !important; }
    .btn-default.dropdown-toggle:hover, .btn-default.dropdown-toggle:focus {
      background-color: #30cfc0 !important; }
  .btn-default:not([disabled]):not(.disabled):active, .btn-default:not([disabled]):not(.disabled).active,
  .show > .btn-default.dropdown-toggle {
    background-color: #186860 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-default:not([disabled]):not(.disabled):active:focus, .btn-default:not([disabled]):not(.disabled).active:focus,
  .show > .btn-default.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.default-ic {
  color: #2bbbad !important; }
  .default-ic:hover, .default-ic:focus {
    color: #2bbbad; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-default {
  color: #fff; }

.btn-outline-default {
  color: #2bbbad !important;
  background-color: transparent !important;
  border: 2px solid #2bbbad !important; }
  .btn-outline-default:hover, .btn-outline-default:focus, .btn-outline-default:active, .btn-outline-default:active:focus, .btn-outline-default.active {
    color: #2bbbad !important;
    background-color: transparent !important;
    border-color: #2bbbad !important; }
  .btn-outline-default:not([disabled]):not(.disabled):active, .btn-outline-default:not([disabled]):not(.disabled).active,
  .show > .btn-outline-default.dropdown-toggle {
    background-color: transparent !important;
    border-color: #2bbbad !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-default:not([disabled]):not(.disabled):active:focus, .btn-outline-default:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-default.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-secondary {
  color: #fff;
  background-color: #a6c !important; }
  .btn-secondary:hover {
    color: #fff;
    background-color: #b579d2; }
  .btn-secondary:focus, .btn-secondary.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-secondary:focus, .btn-secondary:active, .btn-secondary.active {
    background-color: #773399; }
  .btn-secondary.dropdown-toggle {
    background-color: #a6c !important; }
    .btn-secondary.dropdown-toggle:hover, .btn-secondary.dropdown-toggle:focus {
      background-color: #b579d2 !important; }
  .btn-secondary:not([disabled]):not(.disabled):active, .btn-secondary:not([disabled]):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    background-color: #773399 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-secondary:not([disabled]):not(.disabled):active:focus, .btn-secondary:not([disabled]):not(.disabled).active:focus,
  .show > .btn-secondary.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.secondary-ic {
  color: #a6c !important; }
  .secondary-ic:hover, .secondary-ic:focus {
    color: #a6c; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-secondary {
  color: #fff; }

.btn-outline-secondary {
  color: #a6c !important;
  background-color: transparent !important;
  border: 2px solid #a6c !important; }
  .btn-outline-secondary:hover, .btn-outline-secondary:focus, .btn-outline-secondary:active, .btn-outline-secondary:active:focus, .btn-outline-secondary.active {
    color: #a6c !important;
    background-color: transparent !important;
    border-color: #a6c !important; }
  .btn-outline-secondary:not([disabled]):not(.disabled):active, .btn-outline-secondary:not([disabled]):not(.disabled).active,
  .show > .btn-outline-secondary.dropdown-toggle {
    background-color: transparent !important;
    border-color: #a6c !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-secondary:not([disabled]):not(.disabled):active:focus, .btn-outline-secondary:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-secondary.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-elegant {
  color: #fff;
  background-color: #2e2e2e !important; }
  .btn-elegant:hover {
    color: #fff;
    background-color: #3b3b3b; }
  .btn-elegant:focus, .btn-elegant.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-elegant:focus, .btn-elegant:active, .btn-elegant.active {
    background-color: black; }
  .btn-elegant.dropdown-toggle {
    background-color: #2e2e2e !important; }
    .btn-elegant.dropdown-toggle:hover, .btn-elegant.dropdown-toggle:focus {
      background-color: #3b3b3b !important; }
  .btn-elegant:not([disabled]):not(.disabled):active, .btn-elegant:not([disabled]):not(.disabled).active,
  .show > .btn-elegant.dropdown-toggle {
    background-color: black !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-elegant:not([disabled]):not(.disabled):active:focus, .btn-elegant:not([disabled]):not(.disabled).active:focus,
  .show > .btn-elegant.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.elegant-ic {
  color: #2e2e2e !important; }
  .elegant-ic:hover, .elegant-ic:focus {
    color: #2e2e2e; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-elegant {
  color: #fff; }

.btn-outline-elegant {
  color: #2e2e2e !important;
  background-color: transparent !important;
  border: 2px solid #2e2e2e !important; }
  .btn-outline-elegant:hover, .btn-outline-elegant:focus, .btn-outline-elegant:active, .btn-outline-elegant:active:focus, .btn-outline-elegant.active {
    color: #2e2e2e !important;
    background-color: transparent !important;
    border-color: #2e2e2e !important; }
  .btn-outline-elegant:not([disabled]):not(.disabled):active, .btn-outline-elegant:not([disabled]):not(.disabled).active,
  .show > .btn-outline-elegant.dropdown-toggle {
    background-color: transparent !important;
    border-color: #2e2e2e !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-elegant:not([disabled]):not(.disabled):active:focus, .btn-outline-elegant:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-elegant.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-unique {
  color: #fff;
  background-color: #880e4f !important; }
  .btn-unique:hover {
    color: #fff;
    background-color: #9f105c; }
  .btn-unique:focus, .btn-unique.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-unique:focus, .btn-unique:active, .btn-unique.active {
    background-color: #2c0419; }
  .btn-unique.dropdown-toggle {
    background-color: #880e4f !important; }
    .btn-unique.dropdown-toggle:hover, .btn-unique.dropdown-toggle:focus {
      background-color: #9f105c !important; }
  .btn-unique:not([disabled]):not(.disabled):active, .btn-unique:not([disabled]):not(.disabled).active,
  .show > .btn-unique.dropdown-toggle {
    background-color: #2c0419 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-unique:not([disabled]):not(.disabled):active:focus, .btn-unique:not([disabled]):not(.disabled).active:focus,
  .show > .btn-unique.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.unique-ic {
  color: #880e4f !important; }
  .unique-ic:hover, .unique-ic:focus {
    color: #880e4f; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-unique {
  color: #fff; }

.btn-outline-unique {
  color: #880e4f !important;
  background-color: transparent !important;
  border: 2px solid #880e4f !important; }
  .btn-outline-unique:hover, .btn-outline-unique:focus, .btn-outline-unique:active, .btn-outline-unique:active:focus, .btn-outline-unique.active {
    color: #880e4f !important;
    background-color: transparent !important;
    border-color: #880e4f !important; }
  .btn-outline-unique:not([disabled]):not(.disabled):active, .btn-outline-unique:not([disabled]):not(.disabled).active,
  .show > .btn-outline-unique.dropdown-toggle {
    background-color: transparent !important;
    border-color: #880e4f !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-unique:not([disabled]):not(.disabled):active:focus, .btn-outline-unique:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-unique.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-dark-green {
  color: #fff;
  background-color: #388e3c !important; }
  .btn-dark-green:hover {
    color: #fff;
    background-color: #3fa044; }
  .btn-dark-green:focus, .btn-dark-green.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-dark-green:focus, .btn-dark-green:active, .btn-dark-green.active {
    background-color: #1b451d; }
  .btn-dark-green.dropdown-toggle {
    background-color: #388e3c !important; }
    .btn-dark-green.dropdown-toggle:hover, .btn-dark-green.dropdown-toggle:focus {
      background-color: #3fa044 !important; }
  .btn-dark-green:not([disabled]):not(.disabled):active, .btn-dark-green:not([disabled]):not(.disabled).active,
  .show > .btn-dark-green.dropdown-toggle {
    background-color: #1b451d !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-dark-green:not([disabled]):not(.disabled):active:focus, .btn-dark-green:not([disabled]):not(.disabled).active:focus,
  .show > .btn-dark-green.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.dark-green-ic {
  color: #388e3c !important; }
  .dark-green-ic:hover, .dark-green-ic:focus {
    color: #388e3c; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-dark-green {
  color: #fff; }

.btn-outline-dark-green {
  color: #388e3c !important;
  background-color: transparent !important;
  border: 2px solid #388e3c !important; }
  .btn-outline-dark-green:hover, .btn-outline-dark-green:focus, .btn-outline-dark-green:active, .btn-outline-dark-green:active:focus, .btn-outline-dark-green.active {
    color: #388e3c !important;
    background-color: transparent !important;
    border-color: #388e3c !important; }
  .btn-outline-dark-green:not([disabled]):not(.disabled):active, .btn-outline-dark-green:not([disabled]):not(.disabled).active,
  .show > .btn-outline-dark-green.dropdown-toggle {
    background-color: transparent !important;
    border-color: #388e3c !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-dark-green:not([disabled]):not(.disabled):active:focus, .btn-outline-dark-green:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-dark-green.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-mdb-color {
  color: #fff;
  background-color: #59698d !important; }
  .btn-mdb-color:hover {
    color: #fff;
    background-color: #63759d; }
  .btn-mdb-color:focus, .btn-mdb-color.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-mdb-color:focus, .btn-mdb-color:active, .btn-mdb-color.active {
    background-color: #323a4e; }
  .btn-mdb-color.dropdown-toggle {
    background-color: #59698d !important; }
    .btn-mdb-color.dropdown-toggle:hover, .btn-mdb-color.dropdown-toggle:focus {
      background-color: #63759d !important; }
  .btn-mdb-color:not([disabled]):not(.disabled):active, .btn-mdb-color:not([disabled]):not(.disabled).active,
  .show > .btn-mdb-color.dropdown-toggle {
    background-color: #323a4e !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-mdb-color:not([disabled]):not(.disabled):active:focus, .btn-mdb-color:not([disabled]):not(.disabled).active:focus,
  .show > .btn-mdb-color.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.mdb-color-ic {
  color: #59698d !important; }
  .mdb-color-ic:hover, .mdb-color-ic:focus {
    color: #59698d; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-mdb-color {
  color: #fff; }

.btn-outline-mdb-color {
  color: #59698d !important;
  background-color: transparent !important;
  border: 2px solid #59698d !important; }
  .btn-outline-mdb-color:hover, .btn-outline-mdb-color:focus, .btn-outline-mdb-color:active, .btn-outline-mdb-color:active:focus, .btn-outline-mdb-color.active {
    color: #59698d !important;
    background-color: transparent !important;
    border-color: #59698d !important; }
  .btn-outline-mdb-color:not([disabled]):not(.disabled):active, .btn-outline-mdb-color:not([disabled]):not(.disabled).active,
  .show > .btn-outline-mdb-color.dropdown-toggle {
    background-color: transparent !important;
    border-color: #59698d !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-mdb-color:not([disabled]):not(.disabled):active:focus, .btn-outline-mdb-color:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-mdb-color.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-red {
  color: #fff;
  background-color: #d32f2f !important; }
  .btn-red:hover {
    color: #fff;
    background-color: #d74444; }
  .btn-red:focus, .btn-red.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-red:focus, .btn-red:active, .btn-red.active {
    background-color: #811b1b; }
  .btn-red.dropdown-toggle {
    background-color: #d32f2f !important; }
    .btn-red.dropdown-toggle:hover, .btn-red.dropdown-toggle:focus {
      background-color: #d74444 !important; }
  .btn-red:not([disabled]):not(.disabled):active, .btn-red:not([disabled]):not(.disabled).active,
  .show > .btn-red.dropdown-toggle {
    background-color: #811b1b !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-red:not([disabled]):not(.disabled):active:focus, .btn-red:not([disabled]):not(.disabled).active:focus,
  .show > .btn-red.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.red-ic {
  color: #d32f2f !important; }
  .red-ic:hover, .red-ic:focus {
    color: #d32f2f; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-red {
  color: #fff; }

.btn-outline-red {
  color: #d32f2f !important;
  background-color: transparent !important;
  border: 2px solid #d32f2f !important; }
  .btn-outline-red:hover, .btn-outline-red:focus, .btn-outline-red:active, .btn-outline-red:active:focus, .btn-outline-red.active {
    color: #d32f2f !important;
    background-color: transparent !important;
    border-color: #d32f2f !important; }
  .btn-outline-red:not([disabled]):not(.disabled):active, .btn-outline-red:not([disabled]):not(.disabled).active,
  .show > .btn-outline-red.dropdown-toggle {
    background-color: transparent !important;
    border-color: #d32f2f !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-red:not([disabled]):not(.disabled):active:focus, .btn-outline-red:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-red.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-pink {
  color: #fff;
  background-color: #ec407a !important; }
  .btn-pink:hover {
    color: #fff;
    background-color: #ee578a; }
  .btn-pink:focus, .btn-pink.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-pink:focus, .btn-pink:active, .btn-pink.active {
    background-color: #b41249; }
  .btn-pink.dropdown-toggle {
    background-color: #ec407a !important; }
    .btn-pink.dropdown-toggle:hover, .btn-pink.dropdown-toggle:focus {
      background-color: #ee578a !important; }
  .btn-pink:not([disabled]):not(.disabled):active, .btn-pink:not([disabled]):not(.disabled).active,
  .show > .btn-pink.dropdown-toggle {
    background-color: #b41249 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-pink:not([disabled]):not(.disabled):active:focus, .btn-pink:not([disabled]):not(.disabled).active:focus,
  .show > .btn-pink.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.pink-ic {
  color: #ec407a !important; }
  .pink-ic:hover, .pink-ic:focus {
    color: #ec407a; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-pink {
  color: #fff; }

.btn-outline-pink {
  color: #ec407a !important;
  background-color: transparent !important;
  border: 2px solid #ec407a !important; }
  .btn-outline-pink:hover, .btn-outline-pink:focus, .btn-outline-pink:active, .btn-outline-pink:active:focus, .btn-outline-pink.active {
    color: #ec407a !important;
    background-color: transparent !important;
    border-color: #ec407a !important; }
  .btn-outline-pink:not([disabled]):not(.disabled):active, .btn-outline-pink:not([disabled]):not(.disabled).active,
  .show > .btn-outline-pink.dropdown-toggle {
    background-color: transparent !important;
    border-color: #ec407a !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-pink:not([disabled]):not(.disabled):active:focus, .btn-outline-pink:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-pink.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-purple {
  color: #fff;
  background-color: #8e24aa !important; }
  .btn-purple:hover {
    color: #fff;
    background-color: #a028bf; }
  .btn-purple:focus, .btn-purple.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-purple:focus, .btn-purple:active, .btn-purple.active {
    background-color: #481256; }
  .btn-purple.dropdown-toggle {
    background-color: #8e24aa !important; }
    .btn-purple.dropdown-toggle:hover, .btn-purple.dropdown-toggle:focus {
      background-color: #a028bf !important; }
  .btn-purple:not([disabled]):not(.disabled):active, .btn-purple:not([disabled]):not(.disabled).active,
  .show > .btn-purple.dropdown-toggle {
    background-color: #481256 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-purple:not([disabled]):not(.disabled):active:focus, .btn-purple:not([disabled]):not(.disabled).active:focus,
  .show > .btn-purple.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.purple-ic {
  color: #8e24aa !important; }
  .purple-ic:hover, .purple-ic:focus {
    color: #8e24aa; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-purple {
  color: #fff; }

.btn-outline-purple {
  color: #8e24aa !important;
  background-color: transparent !important;
  border: 2px solid #8e24aa !important; }
  .btn-outline-purple:hover, .btn-outline-purple:focus, .btn-outline-purple:active, .btn-outline-purple:active:focus, .btn-outline-purple.active {
    color: #8e24aa !important;
    background-color: transparent !important;
    border-color: #8e24aa !important; }
  .btn-outline-purple:not([disabled]):not(.disabled):active, .btn-outline-purple:not([disabled]):not(.disabled).active,
  .show > .btn-outline-purple.dropdown-toggle {
    background-color: transparent !important;
    border-color: #8e24aa !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-purple:not([disabled]):not(.disabled):active:focus, .btn-outline-purple:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-purple.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-deep-purple {
  color: #fff;
  background-color: #512da8 !important; }
  .btn-deep-purple:hover {
    color: #fff;
    background-color: #5b32bc; }
  .btn-deep-purple:focus, .btn-deep-purple.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-deep-purple:focus, .btn-deep-purple:active, .btn-deep-purple.active {
    background-color: #2a1758; }
  .btn-deep-purple.dropdown-toggle {
    background-color: #512da8 !important; }
    .btn-deep-purple.dropdown-toggle:hover, .btn-deep-purple.dropdown-toggle:focus {
      background-color: #5b32bc !important; }
  .btn-deep-purple:not([disabled]):not(.disabled):active, .btn-deep-purple:not([disabled]):not(.disabled).active,
  .show > .btn-deep-purple.dropdown-toggle {
    background-color: #2a1758 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-deep-purple:not([disabled]):not(.disabled):active:focus, .btn-deep-purple:not([disabled]):not(.disabled).active:focus,
  .show > .btn-deep-purple.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.deep-purple-ic {
  color: #512da8 !important; }
  .deep-purple-ic:hover, .deep-purple-ic:focus {
    color: #512da8; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-deep-purple {
  color: #fff; }

.btn-outline-deep-purple {
  color: #512da8 !important;
  background-color: transparent !important;
  border: 2px solid #512da8 !important; }
  .btn-outline-deep-purple:hover, .btn-outline-deep-purple:focus, .btn-outline-deep-purple:active, .btn-outline-deep-purple:active:focus, .btn-outline-deep-purple.active {
    color: #512da8 !important;
    background-color: transparent !important;
    border-color: #512da8 !important; }
  .btn-outline-deep-purple:not([disabled]):not(.disabled):active, .btn-outline-deep-purple:not([disabled]):not(.disabled).active,
  .show > .btn-outline-deep-purple.dropdown-toggle {
    background-color: transparent !important;
    border-color: #512da8 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-deep-purple:not([disabled]):not(.disabled):active:focus, .btn-outline-deep-purple:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-deep-purple.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-indigo {
  color: #fff;
  background-color: #3f51b5 !important; }
  .btn-indigo:hover {
    color: #fff;
    background-color: #4d5ec1; }
  .btn-indigo:focus, .btn-indigo.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-indigo:focus, .btn-indigo:active, .btn-indigo.active {
    background-color: #252f69; }
  .btn-indigo.dropdown-toggle {
    background-color: #3f51b5 !important; }
    .btn-indigo.dropdown-toggle:hover, .btn-indigo.dropdown-toggle:focus {
      background-color: #4d5ec1 !important; }
  .btn-indigo:not([disabled]):not(.disabled):active, .btn-indigo:not([disabled]):not(.disabled).active,
  .show > .btn-indigo.dropdown-toggle {
    background-color: #252f69 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-indigo:not([disabled]):not(.disabled):active:focus, .btn-indigo:not([disabled]):not(.disabled).active:focus,
  .show > .btn-indigo.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.indigo-ic {
  color: #3f51b5 !important; }
  .indigo-ic:hover, .indigo-ic:focus {
    color: #3f51b5; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-indigo {
  color: #fff; }

.btn-outline-indigo {
  color: #3f51b5 !important;
  background-color: transparent !important;
  border: 2px solid #3f51b5 !important; }
  .btn-outline-indigo:hover, .btn-outline-indigo:focus, .btn-outline-indigo:active, .btn-outline-indigo:active:focus, .btn-outline-indigo.active {
    color: #3f51b5 !important;
    background-color: transparent !important;
    border-color: #3f51b5 !important; }
  .btn-outline-indigo:not([disabled]):not(.disabled):active, .btn-outline-indigo:not([disabled]):not(.disabled).active,
  .show > .btn-outline-indigo.dropdown-toggle {
    background-color: transparent !important;
    border-color: #3f51b5 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-indigo:not([disabled]):not(.disabled):active:focus, .btn-outline-indigo:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-indigo.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-blue {
  color: #fff;
  background-color: #1976d2 !important; }
  .btn-blue:hover {
    color: #fff;
    background-color: #2083e4; }
  .btn-blue:focus, .btn-blue.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-blue:focus, .btn-blue:active, .btn-blue.active {
    background-color: #0e4377; }
  .btn-blue.dropdown-toggle {
    background-color: #1976d2 !important; }
    .btn-blue.dropdown-toggle:hover, .btn-blue.dropdown-toggle:focus {
      background-color: #2083e4 !important; }
  .btn-blue:not([disabled]):not(.disabled):active, .btn-blue:not([disabled]):not(.disabled).active,
  .show > .btn-blue.dropdown-toggle {
    background-color: #0e4377 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-blue:not([disabled]):not(.disabled):active:focus, .btn-blue:not([disabled]):not(.disabled).active:focus,
  .show > .btn-blue.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.blue-ic {
  color: #1976d2 !important; }
  .blue-ic:hover, .blue-ic:focus {
    color: #1976d2; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-blue {
  color: #fff; }

.btn-outline-blue {
  color: #1976d2 !important;
  background-color: transparent !important;
  border: 2px solid #1976d2 !important; }
  .btn-outline-blue:hover, .btn-outline-blue:focus, .btn-outline-blue:active, .btn-outline-blue:active:focus, .btn-outline-blue.active {
    color: #1976d2 !important;
    background-color: transparent !important;
    border-color: #1976d2 !important; }
  .btn-outline-blue:not([disabled]):not(.disabled):active, .btn-outline-blue:not([disabled]):not(.disabled).active,
  .show > .btn-outline-blue.dropdown-toggle {
    background-color: transparent !important;
    border-color: #1976d2 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-blue:not([disabled]):not(.disabled):active:focus, .btn-outline-blue:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-blue.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-light-blue {
  color: #fff;
  background-color: #82b1ff !important; }
  .btn-light-blue:hover {
    color: #fff;
    background-color: #9cc1ff; }
  .btn-light-blue:focus, .btn-light-blue.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-light-blue:focus, .btn-light-blue:active, .btn-light-blue.active {
    background-color: #1c71ff; }
  .btn-light-blue.dropdown-toggle {
    background-color: #82b1ff !important; }
    .btn-light-blue.dropdown-toggle:hover, .btn-light-blue.dropdown-toggle:focus {
      background-color: #9cc1ff !important; }
  .btn-light-blue:not([disabled]):not(.disabled):active, .btn-light-blue:not([disabled]):not(.disabled).active,
  .show > .btn-light-blue.dropdown-toggle {
    background-color: #1c71ff !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-light-blue:not([disabled]):not(.disabled):active:focus, .btn-light-blue:not([disabled]):not(.disabled).active:focus,
  .show > .btn-light-blue.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.light-blue-ic {
  color: #82b1ff !important; }
  .light-blue-ic:hover, .light-blue-ic:focus {
    color: #82b1ff; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-light-blue {
  color: #fff; }

.btn-outline-light-blue {
  color: #82b1ff !important;
  background-color: transparent !important;
  border: 2px solid #82b1ff !important; }
  .btn-outline-light-blue:hover, .btn-outline-light-blue:focus, .btn-outline-light-blue:active, .btn-outline-light-blue:active:focus, .btn-outline-light-blue.active {
    color: #82b1ff !important;
    background-color: transparent !important;
    border-color: #82b1ff !important; }
  .btn-outline-light-blue:not([disabled]):not(.disabled):active, .btn-outline-light-blue:not([disabled]):not(.disabled).active,
  .show > .btn-outline-light-blue.dropdown-toggle {
    background-color: transparent !important;
    border-color: #82b1ff !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-light-blue:not([disabled]):not(.disabled):active:focus, .btn-outline-light-blue:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-light-blue.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-cyan {
  color: #fff;
  background-color: #00bcd4 !important; }
  .btn-cyan:hover {
    color: #fff;
    background-color: #00d3ee; }
  .btn-cyan:focus, .btn-cyan.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-cyan:focus, .btn-cyan:active, .btn-cyan.active {
    background-color: #00626e; }
  .btn-cyan.dropdown-toggle {
    background-color: #00bcd4 !important; }
    .btn-cyan.dropdown-toggle:hover, .btn-cyan.dropdown-toggle:focus {
      background-color: #00d3ee !important; }
  .btn-cyan:not([disabled]):not(.disabled):active, .btn-cyan:not([disabled]):not(.disabled).active,
  .show > .btn-cyan.dropdown-toggle {
    background-color: #00626e !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-cyan:not([disabled]):not(.disabled):active:focus, .btn-cyan:not([disabled]):not(.disabled).active:focus,
  .show > .btn-cyan.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.cyan-ic {
  color: #00bcd4 !important; }
  .cyan-ic:hover, .cyan-ic:focus {
    color: #00bcd4; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-cyan {
  color: #fff; }

.btn-outline-cyan {
  color: #00bcd4 !important;
  background-color: transparent !important;
  border: 2px solid #00bcd4 !important; }
  .btn-outline-cyan:hover, .btn-outline-cyan:focus, .btn-outline-cyan:active, .btn-outline-cyan:active:focus, .btn-outline-cyan.active {
    color: #00bcd4 !important;
    background-color: transparent !important;
    border-color: #00bcd4 !important; }
  .btn-outline-cyan:not([disabled]):not(.disabled):active, .btn-outline-cyan:not([disabled]):not(.disabled).active,
  .show > .btn-outline-cyan.dropdown-toggle {
    background-color: transparent !important;
    border-color: #00bcd4 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-cyan:not([disabled]):not(.disabled):active:focus, .btn-outline-cyan:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-cyan.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-teal {
  color: #fff;
  background-color: #00796b !important; }
  .btn-teal:hover {
    color: #fff;
    background-color: #009382; }
  .btn-teal:focus, .btn-teal.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-teal:focus, .btn-teal:active, .btn-teal.active {
    background-color: #001311; }
  .btn-teal.dropdown-toggle {
    background-color: #00796b !important; }
    .btn-teal.dropdown-toggle:hover, .btn-teal.dropdown-toggle:focus {
      background-color: #009382 !important; }
  .btn-teal:not([disabled]):not(.disabled):active, .btn-teal:not([disabled]):not(.disabled).active,
  .show > .btn-teal.dropdown-toggle {
    background-color: #001311 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-teal:not([disabled]):not(.disabled):active:focus, .btn-teal:not([disabled]):not(.disabled).active:focus,
  .show > .btn-teal.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.teal-ic {
  color: #00796b !important; }
  .teal-ic:hover, .teal-ic:focus {
    color: #00796b; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-teal {
  color: #fff; }

.btn-outline-teal {
  color: #00796b !important;
  background-color: transparent !important;
  border: 2px solid #00796b !important; }
  .btn-outline-teal:hover, .btn-outline-teal:focus, .btn-outline-teal:active, .btn-outline-teal:active:focus, .btn-outline-teal.active {
    color: #00796b !important;
    background-color: transparent !important;
    border-color: #00796b !important; }
  .btn-outline-teal:not([disabled]):not(.disabled):active, .btn-outline-teal:not([disabled]):not(.disabled).active,
  .show > .btn-outline-teal.dropdown-toggle {
    background-color: transparent !important;
    border-color: #00796b !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-teal:not([disabled]):not(.disabled):active:focus, .btn-outline-teal:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-teal.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-green {
  color: #fff;
  background-color: #388e3c !important; }
  .btn-green:hover {
    color: #fff;
    background-color: #3fa044; }
  .btn-green:focus, .btn-green.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-green:focus, .btn-green:active, .btn-green.active {
    background-color: #1b451d; }
  .btn-green.dropdown-toggle {
    background-color: #388e3c !important; }
    .btn-green.dropdown-toggle:hover, .btn-green.dropdown-toggle:focus {
      background-color: #3fa044 !important; }
  .btn-green:not([disabled]):not(.disabled):active, .btn-green:not([disabled]):not(.disabled).active,
  .show > .btn-green.dropdown-toggle {
    background-color: #1b451d !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-green:not([disabled]):not(.disabled):active:focus, .btn-green:not([disabled]):not(.disabled).active:focus,
  .show > .btn-green.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.green-ic {
  color: #388e3c !important; }
  .green-ic:hover, .green-ic:focus {
    color: #388e3c; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-green {
  color: #fff; }

.btn-outline-green {
  color: #388e3c !important;
  background-color: transparent !important;
  border: 2px solid #388e3c !important; }
  .btn-outline-green:hover, .btn-outline-green:focus, .btn-outline-green:active, .btn-outline-green:active:focus, .btn-outline-green.active {
    color: #388e3c !important;
    background-color: transparent !important;
    border-color: #388e3c !important; }
  .btn-outline-green:not([disabled]):not(.disabled):active, .btn-outline-green:not([disabled]):not(.disabled).active,
  .show > .btn-outline-green.dropdown-toggle {
    background-color: transparent !important;
    border-color: #388e3c !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-green:not([disabled]):not(.disabled):active:focus, .btn-outline-green:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-green.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-light-green {
  color: #fff;
  background-color: #8bc34a !important; }
  .btn-light-green:hover {
    color: #fff;
    background-color: #97c95d; }
  .btn-light-green:focus, .btn-light-green.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-light-green:focus, .btn-light-green:active, .btn-light-green.active {
    background-color: #577d2a; }
  .btn-light-green.dropdown-toggle {
    background-color: #8bc34a !important; }
    .btn-light-green.dropdown-toggle:hover, .btn-light-green.dropdown-toggle:focus {
      background-color: #97c95d !important; }
  .btn-light-green:not([disabled]):not(.disabled):active, .btn-light-green:not([disabled]):not(.disabled).active,
  .show > .btn-light-green.dropdown-toggle {
    background-color: #577d2a !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-light-green:not([disabled]):not(.disabled):active:focus, .btn-light-green:not([disabled]):not(.disabled).active:focus,
  .show > .btn-light-green.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.light-green-ic {
  color: #8bc34a !important; }
  .light-green-ic:hover, .light-green-ic:focus {
    color: #8bc34a; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-light-green {
  color: #fff; }

.btn-outline-light-green {
  color: #8bc34a !important;
  background-color: transparent !important;
  border: 2px solid #8bc34a !important; }
  .btn-outline-light-green:hover, .btn-outline-light-green:focus, .btn-outline-light-green:active, .btn-outline-light-green:active:focus, .btn-outline-light-green.active {
    color: #8bc34a !important;
    background-color: transparent !important;
    border-color: #8bc34a !important; }
  .btn-outline-light-green:not([disabled]):not(.disabled):active, .btn-outline-light-green:not([disabled]):not(.disabled).active,
  .show > .btn-outline-light-green.dropdown-toggle {
    background-color: transparent !important;
    border-color: #8bc34a !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-light-green:not([disabled]):not(.disabled):active:focus, .btn-outline-light-green:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-light-green.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-lime {
  color: #fff;
  background-color: #afb42b !important; }
  .btn-lime:hover {
    color: #fff;
    background-color: #c3c930; }
  .btn-lime:focus, .btn-lime.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-lime:focus, .btn-lime:active, .btn-lime.active {
    background-color: #5f6217; }
  .btn-lime.dropdown-toggle {
    background-color: #afb42b !important; }
    .btn-lime.dropdown-toggle:hover, .btn-lime.dropdown-toggle:focus {
      background-color: #c3c930 !important; }
  .btn-lime:not([disabled]):not(.disabled):active, .btn-lime:not([disabled]):not(.disabled).active,
  .show > .btn-lime.dropdown-toggle {
    background-color: #5f6217 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-lime:not([disabled]):not(.disabled):active:focus, .btn-lime:not([disabled]):not(.disabled).active:focus,
  .show > .btn-lime.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.lime-ic {
  color: #afb42b !important; }
  .lime-ic:hover, .lime-ic:focus {
    color: #afb42b; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-lime {
  color: #fff; }

.btn-outline-lime {
  color: #afb42b !important;
  background-color: transparent !important;
  border: 2px solid #afb42b !important; }
  .btn-outline-lime:hover, .btn-outline-lime:focus, .btn-outline-lime:active, .btn-outline-lime:active:focus, .btn-outline-lime.active {
    color: #afb42b !important;
    background-color: transparent !important;
    border-color: #afb42b !important; }
  .btn-outline-lime:not([disabled]):not(.disabled):active, .btn-outline-lime:not([disabled]):not(.disabled).active,
  .show > .btn-outline-lime.dropdown-toggle {
    background-color: transparent !important;
    border-color: #afb42b !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-lime:not([disabled]):not(.disabled):active:focus, .btn-outline-lime:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-lime.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-yellow {
  color: #fff;
  background-color: #fbc02d !important; }
  .btn-yellow:hover {
    color: #fff;
    background-color: #fbc846; }
  .btn-yellow:focus, .btn-yellow.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-yellow:focus, .btn-yellow:active, .btn-yellow.active {
    background-color: #be8904; }
  .btn-yellow.dropdown-toggle {
    background-color: #fbc02d !important; }
    .btn-yellow.dropdown-toggle:hover, .btn-yellow.dropdown-toggle:focus {
      background-color: #fbc846 !important; }
  .btn-yellow:not([disabled]):not(.disabled):active, .btn-yellow:not([disabled]):not(.disabled).active,
  .show > .btn-yellow.dropdown-toggle {
    background-color: #be8904 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-yellow:not([disabled]):not(.disabled):active:focus, .btn-yellow:not([disabled]):not(.disabled).active:focus,
  .show > .btn-yellow.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.yellow-ic {
  color: #fbc02d !important; }
  .yellow-ic:hover, .yellow-ic:focus {
    color: #fbc02d; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-yellow {
  color: #fff; }

.btn-outline-yellow {
  color: #fbc02d !important;
  background-color: transparent !important;
  border: 2px solid #fbc02d !important; }
  .btn-outline-yellow:hover, .btn-outline-yellow:focus, .btn-outline-yellow:active, .btn-outline-yellow:active:focus, .btn-outline-yellow.active {
    color: #fbc02d !important;
    background-color: transparent !important;
    border-color: #fbc02d !important; }
  .btn-outline-yellow:not([disabled]):not(.disabled):active, .btn-outline-yellow:not([disabled]):not(.disabled).active,
  .show > .btn-outline-yellow.dropdown-toggle {
    background-color: transparent !important;
    border-color: #fbc02d !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-yellow:not([disabled]):not(.disabled):active:focus, .btn-outline-yellow:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-yellow.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-amber {
  color: #fff;
  background-color: #ffa000 !important; }
  .btn-amber:hover {
    color: #fff;
    background-color: #ffaa1a; }
  .btn-amber:focus, .btn-amber.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-amber:focus, .btn-amber:active, .btn-amber.active {
    background-color: #996000; }
  .btn-amber.dropdown-toggle {
    background-color: #ffa000 !important; }
    .btn-amber.dropdown-toggle:hover, .btn-amber.dropdown-toggle:focus {
      background-color: #ffaa1a !important; }
  .btn-amber:not([disabled]):not(.disabled):active, .btn-amber:not([disabled]):not(.disabled).active,
  .show > .btn-amber.dropdown-toggle {
    background-color: #996000 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-amber:not([disabled]):not(.disabled):active:focus, .btn-amber:not([disabled]):not(.disabled).active:focus,
  .show > .btn-amber.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.amber-ic {
  color: #ffa000 !important; }
  .amber-ic:hover, .amber-ic:focus {
    color: #ffa000; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-amber {
  color: #fff; }

.btn-outline-amber {
  color: #ffa000 !important;
  background-color: transparent !important;
  border: 2px solid #ffa000 !important; }
  .btn-outline-amber:hover, .btn-outline-amber:focus, .btn-outline-amber:active, .btn-outline-amber:active:focus, .btn-outline-amber.active {
    color: #ffa000 !important;
    background-color: transparent !important;
    border-color: #ffa000 !important; }
  .btn-outline-amber:not([disabled]):not(.disabled):active, .btn-outline-amber:not([disabled]):not(.disabled).active,
  .show > .btn-outline-amber.dropdown-toggle {
    background-color: transparent !important;
    border-color: #ffa000 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-amber:not([disabled]):not(.disabled):active:focus, .btn-outline-amber:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-amber.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-orange {
  color: #fff;
  background-color: #f57c00 !important; }
  .btn-orange:hover {
    color: #fff;
    background-color: #ff8910; }
  .btn-orange:focus, .btn-orange.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-orange:focus, .btn-orange:active, .btn-orange.active {
    background-color: #8f4800; }
  .btn-orange.dropdown-toggle {
    background-color: #f57c00 !important; }
    .btn-orange.dropdown-toggle:hover, .btn-orange.dropdown-toggle:focus {
      background-color: #ff8910 !important; }
  .btn-orange:not([disabled]):not(.disabled):active, .btn-orange:not([disabled]):not(.disabled).active,
  .show > .btn-orange.dropdown-toggle {
    background-color: #8f4800 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-orange:not([disabled]):not(.disabled):active:focus, .btn-orange:not([disabled]):not(.disabled).active:focus,
  .show > .btn-orange.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.orange-ic {
  color: #f57c00 !important; }
  .orange-ic:hover, .orange-ic:focus {
    color: #f57c00; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-orange {
  color: #fff; }

.btn-outline-orange {
  color: #f57c00 !important;
  background-color: transparent !important;
  border: 2px solid #f57c00 !important; }
  .btn-outline-orange:hover, .btn-outline-orange:focus, .btn-outline-orange:active, .btn-outline-orange:active:focus, .btn-outline-orange.active {
    color: #f57c00 !important;
    background-color: transparent !important;
    border-color: #f57c00 !important; }
  .btn-outline-orange:not([disabled]):not(.disabled):active, .btn-outline-orange:not([disabled]):not(.disabled).active,
  .show > .btn-outline-orange.dropdown-toggle {
    background-color: transparent !important;
    border-color: #f57c00 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-orange:not([disabled]):not(.disabled):active:focus, .btn-outline-orange:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-orange.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-deep-orange {
  color: #fff;
  background-color: #ff7043 !important; }
  .btn-deep-orange:hover {
    color: #fff;
    background-color: #ff835d; }
  .btn-deep-orange:focus, .btn-deep-orange.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-deep-orange:focus, .btn-deep-orange:active, .btn-deep-orange.active {
    background-color: #dc3500; }
  .btn-deep-orange.dropdown-toggle {
    background-color: #ff7043 !important; }
    .btn-deep-orange.dropdown-toggle:hover, .btn-deep-orange.dropdown-toggle:focus {
      background-color: #ff835d !important; }
  .btn-deep-orange:not([disabled]):not(.disabled):active, .btn-deep-orange:not([disabled]):not(.disabled).active,
  .show > .btn-deep-orange.dropdown-toggle {
    background-color: #dc3500 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-deep-orange:not([disabled]):not(.disabled):active:focus, .btn-deep-orange:not([disabled]):not(.disabled).active:focus,
  .show > .btn-deep-orange.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.deep-orange-ic {
  color: #ff7043 !important; }
  .deep-orange-ic:hover, .deep-orange-ic:focus {
    color: #ff7043; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-deep-orange {
  color: #fff; }

.btn-outline-deep-orange {
  color: #ff7043 !important;
  background-color: transparent !important;
  border: 2px solid #ff7043 !important; }
  .btn-outline-deep-orange:hover, .btn-outline-deep-orange:focus, .btn-outline-deep-orange:active, .btn-outline-deep-orange:active:focus, .btn-outline-deep-orange.active {
    color: #ff7043 !important;
    background-color: transparent !important;
    border-color: #ff7043 !important; }
  .btn-outline-deep-orange:not([disabled]):not(.disabled):active, .btn-outline-deep-orange:not([disabled]):not(.disabled).active,
  .show > .btn-outline-deep-orange.dropdown-toggle {
    background-color: transparent !important;
    border-color: #ff7043 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-deep-orange:not([disabled]):not(.disabled):active:focus, .btn-outline-deep-orange:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-deep-orange.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-brown {
  color: #fff;
  background-color: #795548 !important; }
  .btn-brown:hover {
    color: #fff;
    background-color: #896052; }
  .btn-brown:focus, .btn-brown.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-brown:focus, .btn-brown:active, .btn-brown.active {
    background-color: #392822; }
  .btn-brown.dropdown-toggle {
    background-color: #795548 !important; }
    .btn-brown.dropdown-toggle:hover, .btn-brown.dropdown-toggle:focus {
      background-color: #896052 !important; }
  .btn-brown:not([disabled]):not(.disabled):active, .btn-brown:not([disabled]):not(.disabled).active,
  .show > .btn-brown.dropdown-toggle {
    background-color: #392822 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-brown:not([disabled]):not(.disabled):active:focus, .btn-brown:not([disabled]):not(.disabled).active:focus,
  .show > .btn-brown.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.brown-ic {
  color: #795548 !important; }
  .brown-ic:hover, .brown-ic:focus {
    color: #795548; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-brown {
  color: #fff; }

.btn-outline-brown {
  color: #795548 !important;
  background-color: transparent !important;
  border: 2px solid #795548 !important; }
  .btn-outline-brown:hover, .btn-outline-brown:focus, .btn-outline-brown:active, .btn-outline-brown:active:focus, .btn-outline-brown.active {
    color: #795548 !important;
    background-color: transparent !important;
    border-color: #795548 !important; }
  .btn-outline-brown:not([disabled]):not(.disabled):active, .btn-outline-brown:not([disabled]):not(.disabled).active,
  .show > .btn-outline-brown.dropdown-toggle {
    background-color: transparent !important;
    border-color: #795548 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-brown:not([disabled]):not(.disabled):active:focus, .btn-outline-brown:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-brown.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-grey {
  color: #fff;
  background-color: #616161 !important; }
  .btn-grey:hover {
    color: #fff;
    background-color: #6e6e6e; }
  .btn-grey:focus, .btn-grey.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-grey:focus, .btn-grey:active, .btn-grey.active {
    background-color: #2e2e2e; }
  .btn-grey.dropdown-toggle {
    background-color: #616161 !important; }
    .btn-grey.dropdown-toggle:hover, .btn-grey.dropdown-toggle:focus {
      background-color: #6e6e6e !important; }
  .btn-grey:not([disabled]):not(.disabled):active, .btn-grey:not([disabled]):not(.disabled).active,
  .show > .btn-grey.dropdown-toggle {
    background-color: #2e2e2e !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-grey:not([disabled]):not(.disabled):active:focus, .btn-grey:not([disabled]):not(.disabled).active:focus,
  .show > .btn-grey.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.grey-ic {
  color: #616161 !important; }
  .grey-ic:hover, .grey-ic:focus {
    color: #616161; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-grey {
  color: #fff; }

.btn-outline-grey {
  color: #616161 !important;
  background-color: transparent !important;
  border: 2px solid #616161 !important; }
  .btn-outline-grey:hover, .btn-outline-grey:focus, .btn-outline-grey:active, .btn-outline-grey:active:focus, .btn-outline-grey.active {
    color: #616161 !important;
    background-color: transparent !important;
    border-color: #616161 !important; }
  .btn-outline-grey:not([disabled]):not(.disabled):active, .btn-outline-grey:not([disabled]):not(.disabled).active,
  .show > .btn-outline-grey.dropdown-toggle {
    background-color: transparent !important;
    border-color: #616161 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-grey:not([disabled]):not(.disabled):active:focus, .btn-outline-grey:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-grey.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-blue-grey {
  color: #fff;
  background-color: #78909c !important; }
  .btn-blue-grey:hover {
    color: #fff;
    background-color: #879ca7; }
  .btn-blue-grey:focus, .btn-blue-grey.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-blue-grey:focus, .btn-blue-grey:active, .btn-blue-grey.active {
    background-color: #4a5b64; }
  .btn-blue-grey.dropdown-toggle {
    background-color: #78909c !important; }
    .btn-blue-grey.dropdown-toggle:hover, .btn-blue-grey.dropdown-toggle:focus {
      background-color: #879ca7 !important; }
  .btn-blue-grey:not([disabled]):not(.disabled):active, .btn-blue-grey:not([disabled]):not(.disabled).active,
  .show > .btn-blue-grey.dropdown-toggle {
    background-color: #4a5b64 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-blue-grey:not([disabled]):not(.disabled):active:focus, .btn-blue-grey:not([disabled]):not(.disabled).active:focus,
  .show > .btn-blue-grey.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.blue-grey-ic {
  color: #78909c !important; }
  .blue-grey-ic:hover, .blue-grey-ic:focus {
    color: #78909c; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-blue-grey {
  color: #fff; }

.btn-outline-blue-grey {
  color: #78909c !important;
  background-color: transparent !important;
  border: 2px solid #78909c !important; }
  .btn-outline-blue-grey:hover, .btn-outline-blue-grey:focus, .btn-outline-blue-grey:active, .btn-outline-blue-grey:active:focus, .btn-outline-blue-grey.active {
    color: #78909c !important;
    background-color: transparent !important;
    border-color: #78909c !important; }
  .btn-outline-blue-grey:not([disabled]):not(.disabled):active, .btn-outline-blue-grey:not([disabled]):not(.disabled).active,
  .show > .btn-outline-blue-grey.dropdown-toggle {
    background-color: transparent !important;
    border-color: #78909c !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-blue-grey:not([disabled]):not(.disabled):active:focus, .btn-outline-blue-grey:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-blue-grey.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-dark {
  color: #fff;
  background-color: #212121 !important; }
  .btn-dark:hover {
    color: #fff;
    background-color: #2e2e2e; }
  .btn-dark:focus, .btn-dark.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-dark:focus, .btn-dark:active, .btn-dark.active {
    background-color: black; }
  .btn-dark.dropdown-toggle {
    background-color: #212121 !important; }
    .btn-dark.dropdown-toggle:hover, .btn-dark.dropdown-toggle:focus {
      background-color: #2e2e2e !important; }
  .btn-dark:not([disabled]):not(.disabled):active, .btn-dark:not([disabled]):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    background-color: black !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-dark:not([disabled]):not(.disabled):active:focus, .btn-dark:not([disabled]):not(.disabled).active:focus,
  .show > .btn-dark.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.dark-ic {
  color: #212121 !important; }
  .dark-ic:hover, .dark-ic:focus {
    color: #212121; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-dark {
  color: #fff; }

.btn-outline-dark {
  color: #212121 !important;
  background-color: transparent !important;
  border: 2px solid #212121 !important; }
  .btn-outline-dark:hover, .btn-outline-dark:focus, .btn-outline-dark:active, .btn-outline-dark:active:focus, .btn-outline-dark.active {
    color: #212121 !important;
    background-color: transparent !important;
    border-color: #212121 !important; }
  .btn-outline-dark:not([disabled]):not(.disabled):active, .btn-outline-dark:not([disabled]):not(.disabled).active,
  .show > .btn-outline-dark.dropdown-toggle {
    background-color: transparent !important;
    border-color: #212121 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-dark:not([disabled]):not(.disabled):active:focus, .btn-outline-dark:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-dark.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-light {
  color: #000;
  background-color: #e0e0e0 !important; }
  .btn-light:hover {
    color: #000;
    background-color: #ededed; }
  .btn-light:focus, .btn-light.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-light:focus, .btn-light:active, .btn-light.active {
    background-color: #adadad; }
  .btn-light.dropdown-toggle {
    background-color: #e0e0e0 !important; }
    .btn-light.dropdown-toggle:hover, .btn-light.dropdown-toggle:focus {
      background-color: #ededed !important; }
  .btn-light:not([disabled]):not(.disabled):active, .btn-light:not([disabled]):not(.disabled).active,
  .show > .btn-light.dropdown-toggle {
    background-color: #adadad !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-light:not([disabled]):not(.disabled):active:focus, .btn-light:not([disabled]):not(.disabled).active:focus,
  .show > .btn-light.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.light-ic {
  color: #e0e0e0 !important; }
  .light-ic:hover, .light-ic:focus {
    color: #e0e0e0; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #000; }

table.table a.btn.btn-light {
  color: #000; }

.btn-outline-light {
  color: #e0e0e0 !important;
  background-color: transparent !important;
  border: 2px solid #e0e0e0 !important; }
  .btn-outline-light:hover, .btn-outline-light:focus, .btn-outline-light:active, .btn-outline-light:active:focus, .btn-outline-light.active {
    color: #e0e0e0 !important;
    background-color: transparent !important;
    border-color: #e0e0e0 !important; }
  .btn-outline-light:not([disabled]):not(.disabled):active, .btn-outline-light:not([disabled]):not(.disabled).active,
  .show > .btn-outline-light.dropdown-toggle {
    background-color: transparent !important;
    border-color: #e0e0e0 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-light:not([disabled]):not(.disabled):active:focus, .btn-outline-light:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-light.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-white {
  color: #000;
  background-color: #fff !important; }
  .btn-white:hover {
    color: #000;
    background-color: white; }
  .btn-white:focus, .btn-white.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-white:focus, .btn-white:active, .btn-white.active {
    background-color: #cccccc; }
  .btn-white.dropdown-toggle {
    background-color: #fff !important; }
    .btn-white.dropdown-toggle:hover, .btn-white.dropdown-toggle:focus {
      background-color: white !important; }
  .btn-white:not([disabled]):not(.disabled):active, .btn-white:not([disabled]):not(.disabled).active,
  .show > .btn-white.dropdown-toggle {
    background-color: #cccccc !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-white:not([disabled]):not(.disabled):active:focus, .btn-white:not([disabled]):not(.disabled).active:focus,
  .show > .btn-white.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.white-ic {
  color: #fff !important; }
  .white-ic:hover, .white-ic:focus {
    color: #fff; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #000; }

table.table a.btn.btn-white {
  color: #000; }

.btn-outline-white {
  color: #fff !important;
  background-color: transparent !important;
  border: 2px solid #fff !important; }
  .btn-outline-white:hover, .btn-outline-white:focus, .btn-outline-white:active, .btn-outline-white:active:focus, .btn-outline-white.active {
    color: #fff !important;
    background-color: transparent !important;
    border-color: #fff !important; }
  .btn-outline-white:not([disabled]):not(.disabled):active, .btn-outline-white:not([disabled]):not(.disabled).active,
  .show > .btn-outline-white.dropdown-toggle {
    background-color: transparent !important;
    border-color: #fff !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-white:not([disabled]):not(.disabled):active:focus, .btn-outline-white:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-white.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn-black {
  color: #fff;
  background-color: #000 !important; }
  .btn-black:hover {
    color: #fff;
    background-color: #0d0d0d; }
  .btn-black:focus, .btn-black.focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-black:focus, .btn-black:active, .btn-black.active {
    background-color: black; }
  .btn-black.dropdown-toggle {
    background-color: #000 !important; }
    .btn-black.dropdown-toggle:hover, .btn-black.dropdown-toggle:focus {
      background-color: #0d0d0d !important; }
  .btn-black:not([disabled]):not(.disabled):active, .btn-black:not([disabled]):not(.disabled).active,
  .show > .btn-black.dropdown-toggle {
    background-color: black !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-black:not([disabled]):not(.disabled):active:focus, .btn-black:not([disabled]):not(.disabled).active:focus,
  .show > .btn-black.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.black-ic {
  color: #000 !important; }
  .black-ic:hover, .black-ic:focus {
    color: #000; }

a.btn:not([href]):not([tabindex]),
a.btn:not([href]):not([tabindex]):focus,
a.btn:not([href]):not([tabindex]):hover {
  color: #fff; }

table.table a.btn.btn-black {
  color: #fff; }

.btn-outline-black {
  color: #000 !important;
  background-color: transparent !important;
  border: 2px solid #000 !important; }
  .btn-outline-black:hover, .btn-outline-black:focus, .btn-outline-black:active, .btn-outline-black:active:focus, .btn-outline-black.active {
    color: #000 !important;
    background-color: transparent !important;
    border-color: #000 !important; }
  .btn-outline-black:not([disabled]):not(.disabled):active, .btn-outline-black:not([disabled]):not(.disabled).active,
  .show > .btn-outline-black.dropdown-toggle {
    background-color: transparent !important;
    border-color: #000 !important;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-outline-black:not([disabled]):not(.disabled):active:focus, .btn-outline-black:not([disabled]):not(.disabled).active:focus,
  .show > .btn-outline-black.dropdown-toggle:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.btn.purple-gradient {
  color: #fff;
  transition: .5s ease; }
  .btn.purple-gradient:hover, .btn.purple-gradient:focus, .btn.purple-gradient:active,
  .btn.purple-gradient:active:focus .btn.purple-gradient.active {
    background: linear-gradient(#ff88ce, #8f8bf7); }

.btn.peach-gradient {
  color: #fff;
  transition: .5s ease; }
  .btn.peach-gradient:hover, .btn.peach-gradient:focus, .btn.peach-gradient:active,
  .btn.peach-gradient:active:focus .btn.peach-gradient.active {
    background: linear-gradient(#ffdf89, #fc7b7b); }

.btn.aqua-gradient {
  color: #fff;
  transition: .5s ease; }
  .btn.aqua-gradient:hover, .btn.aqua-gradient:focus, .btn.aqua-gradient:active,
  .btn.aqua-gradient:active:focus .btn.aqua-gradient.active {
    background: linear-gradient(#3aa2ff, #1fffac); }

.btn.blue-gradient {
  color: #fff;
  transition: .5s ease; }
  .btn.blue-gradient:hover, .btn.blue-gradient:focus, .btn.blue-gradient:active,
  .btn.blue-gradient:active:focus .btn.blue-gradient.active {
    background: linear-gradient(#5ed1fc, #3647b3); }

.btn-warning:not(:disabled):not(.disabled).active,
.btn-warning:not(:disabled):not(.disabled):active,
.show > .btn-warning.dropdown-toggle {
  color: #fff; }

.card {
  font-weight: 400;
  border: 0;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); }
  .card[class*="border"] {
    border: 1px solid #9e9e9e;
    box-shadow: none; }
  .card .card-body h1, .card .card-body h2, .card .card-body h3, .card .card-body h4, .card .card-body h5, .card .card-body h6 {
    font-weight: 400; }
  .card .card-body .card-title a {
    transition: 0.2s ease-in-out; }
    .card .card-body .card-title a:hover {
      transition: 0.2s ease-in-out; }
  .card .card-body .card-text {
    font-size: 0.9rem;
    font-weight: 400;
    color: #747373; }
  .card .md-form label {
    font-weight: 300; }

.dropdown .dropdown-menu .dropdown-item:active {
  background-color: #757575; }

.md-form.input-group label {
  top: 0;
  margin-bottom: 0; }

.md-form.input-group .input-group-text {
  background-color: #e0e0e0; }
  .md-form.input-group .input-group-text.md-addon {
    font-weight: 500;
    background-color: transparent;
    border: none; }

.md-form.input-group .form-control {
  padding: 0.375rem 0.75rem;
  margin: 0; }

.navbar {
  font-weight: 300;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); }
  .navbar form .md-form input {
    margin: 0 5px 1px 8px; }
  .navbar .breadcrumb {
    padding: 0.3rem 0 0 1rem;
    margin: 0;
    font-size: 15px;
    font-weight: 300;
    background-color: inherit; }
    .navbar .breadcrumb .breadcrumb-item {
      color: #fff; }
      .navbar .breadcrumb .breadcrumb-item.active {
        color: rgba(255, 255, 255, 0.65); }
      .navbar .breadcrumb .breadcrumb-item:before {
        color: rgba(255, 255, 255, 0.65); }
  .navbar .navbar-toggler {
    border-width: 0;
    outline: 0; }
  .navbar .nav-flex-icons {
    flex-direction: row; }
  @media (max-width: 992px) {
    .navbar .container {
      width: 100%; }
      .navbar .container .navbar-toggler-right {
        right: 0; } }
  .navbar .nav-item .nav-link {
    display: block; }
    .navbar .nav-item .nav-link.disabled:active {
      pointer-events: none; }
    .navbar .nav-item .nav-link .fas, .navbar .nav-item .nav-link .fab, .navbar .nav-item .nav-link .far {
      padding-right: 3px;
      padding-left: 3px; }
    @media (max-width: 992px) {
      .navbar .nav-item .nav-link {
        padding-right: 6px;
        padding-left: 6px; } }
  .navbar .dropdown-menu {
    position: absolute !important;
    margin-top: 0; }
    .navbar .dropdown-menu a {
      padding: 10px;
      font-size: 0.9375rem;
      font-weight: 300;
      color: #000; }
    @media (max-width: 600px) {
      .navbar .dropdown-menu form {
        width: 17rem; } }
    @media (min-width: 600px) {
      .navbar .dropdown-menu form {
        width: 22rem; } }
  .navbar.navbar-light .navbar-nav .nav-item .nav-link.disbled {
    color: rgba(0, 0, 0, 0.3); }
    .navbar.navbar-light .navbar-nav .nav-item .nav-link.disbled:hover {
      color: rgba(0, 0, 0, 0.3); }
  .navbar.navbar-light .navbar-toggler-icon {
    cursor: pointer;
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E"); }
  .navbar.navbar-light .breadcrumb .nav-item .nav-link,
  .navbar.navbar-light .navbar-nav .nav-item .nav-link {
    color: #000;
    transition: 0.35s; }
    .navbar.navbar-light .breadcrumb .nav-item .nav-link:hover,
    .navbar.navbar-light .navbar-nav .nav-item .nav-link:hover {
      color: rgba(0, 0, 0, 0.7); }
  .navbar.navbar-light .breadcrumb .nav-item.active > .nav-link,
  .navbar.navbar-light .navbar-nav .nav-item.active > .nav-link {
    background-color: rgba(0, 0, 0, 0.1); }
    .navbar.navbar-light .breadcrumb .nav-item.active > .nav-link:hover,
    .navbar.navbar-light .navbar-nav .nav-item.active > .nav-link:hover {
      color: #000; }
  .navbar.navbar-light .navbar-toggler {
    color: #000; }
  .navbar.navbar-light form .md-form input {
    border-bottom: 1px solid #000; }
    .navbar.navbar-light form .md-form input:focus:not([readonly]) {
      border-color: #4285f4; }
  .navbar.navbar-light form .md-form .form-control {
    color: #000; }
    .navbar.navbar-light form .md-form .form-control::-webkit-input-placeholder {
      font-weight: 300;
      color: #000; }
    .navbar.navbar-light form .md-form .form-control::-moz-placeholder {
      font-weight: 300;
      color: #000; }
    .navbar.navbar-light form .md-form .form-control:-ms-input-placeholder {
      font-weight: 300;
      color: #000; }
    .navbar.navbar-light form .md-form .form-control::-ms-input-placeholder {
      font-weight: 300;
      color: #000; }
    .navbar.navbar-light form .md-form .form-control::placeholder {
      font-weight: 300;
      color: #000; }
  .navbar.navbar-dark .navbar-nav .nav-item .nav-link.disbled {
    color: rgba(255, 255, 255, 0.25); }
    .navbar.navbar-dark .navbar-nav .nav-item .nav-link.disbled:hover {
      color: rgba(255, 255, 255, 0.25); }
  .navbar.navbar-dark .navbar-toggler-icon {
    cursor: pointer;
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E"); }
  .navbar.navbar-dark .breadcrumb .nav-item .nav-link,
  .navbar.navbar-dark .navbar-nav .nav-item .nav-link {
    color: #fff;
    transition: 0.35s; }
    .navbar.navbar-dark .breadcrumb .nav-item .nav-link:hover,
    .navbar.navbar-dark .navbar-nav .nav-item .nav-link:hover {
      color: rgba(255, 255, 255, 0.75); }
  .navbar.navbar-dark .breadcrumb .nav-item.active > .nav-link,
  .navbar.navbar-dark .navbar-nav .nav-item.active > .nav-link {
    background-color: rgba(255, 255, 255, 0.1); }
    .navbar.navbar-dark .breadcrumb .nav-item.active > .nav-link:hover,
    .navbar.navbar-dark .navbar-nav .nav-item.active > .nav-link:hover {
      color: #fff; }
  .navbar.navbar-dark .navbar-toggler {
    color: #fff; }
  .navbar.navbar-dark form .md-form input {
    border-bottom: 1px solid #fff; }
    .navbar.navbar-dark form .md-form input:focus:not([readonly]) {
      border-color: #4285f4; }
  .navbar.navbar-dark form .md-form .form-control {
    color: #fff; }
    .navbar.navbar-dark form .md-form .form-control::-webkit-input-placeholder {
      font-weight: 300;
      color: #fff; }
    .navbar.navbar-dark form .md-form .form-control::-moz-placeholder {
      font-weight: 300;
      color: #fff; }
    .navbar.navbar-dark form .md-form .form-control:-ms-input-placeholder {
      font-weight: 300;
      color: #fff; }
    .navbar.navbar-dark form .md-form .form-control::-ms-input-placeholder {
      font-weight: 300;
      color: #fff; }
    .navbar.navbar-dark form .md-form .form-control::placeholder {
      font-weight: 300;
      color: #fff; }
  @media (min-width: 600px) {
    .navbar.scrolling-navbar {
      padding-top: 12px;
      padding-bottom: 12px;
      transition: background 0.5s ease-in-out, padding 0.5s ease-in-out; }
      .navbar.scrolling-navbar .navbar-nav > li {
        transition-duration: 1s; }
      .navbar.scrolling-navbar.top-nav-collapse {
        padding-top: 5px;
        padding-bottom: 5px; } }

.pagination .page-item.active .page-link {
  color: #fff;
  background-color: #4285f4;
  border-radius: 0.125rem;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  transition: all 0.2s linear; }
  .pagination .page-item.active .page-link:hover {
    background-color: #4285f4; }

.pagination .page-item.disabled .page-link {
  color: #868e96; }

.pagination .page-item .page-link {
  font-size: 0.9rem;
  color: #212529;
  background-color: transparent;
  border: 0;
  outline: 0;
  transition: all 0.3s linear; }
  .pagination .page-item .page-link:hover {
    background-color: #eee;
    border-radius: 0.125rem;
    transition: all 0.3s linear; }
  .pagination .page-item .page-link:focus {
    background-color: transparent;
    box-shadow: none; }

.pagination.pagination-lg .page-item .page-link {
  font-size: 1rem; }

.pagination.pagination-sm .page-item .page-link {
  font-size: 0.8rem; }

.pagination.pagination-circle .page-item .page-link {
  margin-right: 2px;
  margin-left: 2px;
  border-radius: 50%; }
  .pagination.pagination-circle .page-item .page-link:hover {
    border-radius: 50%; }

.pagination.pagination-circle .page-item.active .page-link {
  border-radius: 50%; }

.pagination.pg-blue .page-item.active .page-link {
  background-color: #4285f4; }
  .pagination.pg-blue .page-item.active .page-link:hover {
    background-color: #4285f4; }

.pagination.pg-red .page-item.active .page-link {
  background-color: #ff3547; }
  .pagination.pg-red .page-item.active .page-link:hover {
    background-color: #ff3547; }

.pagination.pg-teal .page-item.active .page-link {
  background-color: #2bbbad; }
  .pagination.pg-teal .page-item.active .page-link:hover {
    background-color: #2bbbad; }

.pagination.pg-dark-grey .page-item.active .page-link {
  background-color: #37474f; }
  .pagination.pg-dark-grey .page-item.active .page-link:hover {
    background-color: #37474f; }

.pagination.pg-dark .page-item.active .page-link {
  background-color: #2e2e2e; }
  .pagination.pg-dark .page-item.active .page-link:hover {
    background-color: #2e2e2e; }

.pagination.pg-blue-grey .page-item.active .page-link {
  background-color: #3f729b; }
  .pagination.pg-blue-grey .page-item.active .page-link:hover {
    background-color: #3f729b; }

.pagination.pg-amber .page-item.active .page-link {
  background-color: #ff6f00; }
  .pagination.pg-amber .page-item.active .page-link:hover {
    background-color: #ff6f00; }

.pagination.pg-purple .page-item.active .page-link {
  background-color: #5e35b1; }
  .pagination.pg-purple .page-item.active .page-link:hover {
    background-color: #5e35b1; }

.badge {
  color: #fff !important;
  border-radius: 0.125rem;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); }

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem; }

.badge-primary {
  color: #fff !important;
  background-color: #4285f4 !important; }

.badge-danger {
  color: #fff !important;
  background-color: #ff3547 !important; }

.badge-warning {
  color: #fff !important;
  background-color: #fb3 !important; }

.badge-success {
  color: #fff !important;
  background-color: #00c851 !important; }

.badge-info {
  color: #fff !important;
  background-color: #33b5e5 !important; }

.badge-default {
  color: #fff !important;
  background-color: #2bbbad !important; }

.badge-secondary {
  color: #fff !important;
  background-color: #a6c !important; }

.badge-dark {
  color: #fff !important;
  background-color: #212121 !important; }

.badge-light {
  color: #000 !important;
  background-color: #e0e0e0 !important; }

body.modal-open {
  padding-right: 0 !important;
  overflow: auto; }

body.scrollable {
  overflow-y: auto; }

.modal-dialog .modal-content {
  border: 0;
  border-radius: 0.125rem;
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .modal-dialog .modal-content .modal-header {
    border-top-left-radius: 0.125rem;
    border-top-right-radius: 0.125rem; }

.modal-dialog.cascading-modal {
  margin-top: 10%; }
  .modal-dialog.cascading-modal .close {
    color: #fff;
    text-shadow: none;
    outline: 0;
    opacity: 1; }
  .modal-dialog.cascading-modal .modal-header {
    padding: 1.5rem;
    margin: -2rem 1rem 1rem 1rem;
    text-align: center;
    border: none;
    border-radius: 0.125rem;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
    .modal-dialog.cascading-modal .modal-header .close {
      margin-right: 1rem; }
    .modal-dialog.cascading-modal .modal-header .title {
      width: 100%;
      margin-bottom: 0;
      font-size: 1.25rem; }
      .modal-dialog.cascading-modal .modal-header .title .fas, .modal-dialog.cascading-modal .modal-header .title .fab, .modal-dialog.cascading-modal .modal-header .title .far {
        margin-right: 9px; }
    .modal-dialog.cascading-modal .modal-header .social-buttons {
      margin-top: 1.5rem; }
      .modal-dialog.cascading-modal .modal-header .social-buttons a {
        font-size: 1rem; }
  .modal-dialog.cascading-modal .modal-c-tabs {
    /*
      .md-tabs {
       border-radius: $md-card-border-radius;
       .nav-item {
         .nav-link {
           border-radius: $md-card-border-radius;
           background-color: inherit;
           color: $white-base;
         }
       }
      }
      */ }
    .modal-dialog.cascading-modal .modal-c-tabs .md-tabs {
      display: flex;
      margin: -1.5rem 1rem 0 1rem;
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); }
      .modal-dialog.cascading-modal .modal-c-tabs .md-tabs li {
        flex: 1; }
        .modal-dialog.cascading-modal .modal-c-tabs .md-tabs li a {
          text-align: center; }
    .modal-dialog.cascading-modal .modal-c-tabs .tab-content {
      padding: 1.7rem 0 0 0; }
  .modal-dialog.cascading-modal .modal-body,
  .modal-dialog.cascading-modal .modal-footer {
    padding-right: 2rem;
    padding-left: 2rem;
    color: #616161; }
    .modal-dialog.cascading-modal .modal-body .additional-option,
    .modal-dialog.cascading-modal .modal-footer .additional-option {
      margin-top: 1rem;
      text-align: center; }
  .modal-dialog.cascading-modal.modal-avatar {
    margin-top: 6rem; }
    .modal-dialog.cascading-modal.modal-avatar .modal-header {
      margin: -6rem 0 -1rem;
      box-shadow: none; }
      .modal-dialog.cascading-modal.modal-avatar .modal-header img {
        width: 130px;
        margin-right: auto;
        margin-left: auto;
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); }

.modal-dialog.modal-notify .heading {
  padding: 0.3rem;
  margin: 0;
  font-size: 1.15rem;
  color: #fff; }

.modal-dialog.modal-notify .modal-header {
  border: 0;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); }

.modal-dialog.modal-notify .close {
  opacity: 1; }

.modal-dialog.modal-notify .modal-body {
  padding: 1.5rem;
  color: #616161; }

.modal-dialog.modal-notify.modal-primary .modal-header {
  background-color: #4285f4; }

.modal-dialog.modal-notify.modal-primary .fas, .modal-dialog.modal-notify.modal-primary .fab, .modal-dialog.modal-notify.modal-primary .far {
  color: #4285f4; }

.modal-dialog.modal-notify.modal-primary .badge {
  background-color: #4285f4; }

.modal-dialog.modal-notify.modal-primary .btn .fas,
.modal-dialog.modal-notify.modal-primary .btn .fab,
.modal-dialog.modal-notify.modal-primary .btn .far {
  color: #fff; }

.modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .fas,
.modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .fab,
.modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .far {
  color: #4285f4; }

.modal-dialog.modal-notify.modal-danger .modal-header {
  background-color: #ff3547; }

.modal-dialog.modal-notify.modal-danger .fas, .modal-dialog.modal-notify.modal-danger .fab, .modal-dialog.modal-notify.modal-danger .far {
  color: #ff3547; }

.modal-dialog.modal-notify.modal-danger .badge {
  background-color: #ff3547; }

.modal-dialog.modal-notify.modal-danger .btn .fas,
.modal-dialog.modal-notify.modal-danger .btn .fab,
.modal-dialog.modal-notify.modal-danger .btn .far {
  color: #fff; }

.modal-dialog.modal-notify.modal-danger .btn.btn-outline-danger .fas,
.modal-dialog.modal-notify.modal-danger .btn.btn-outline-danger .fab,
.modal-dialog.modal-notify.modal-danger .btn.btn-outline-danger .far {
  color: #ff3547; }

.modal-dialog.modal-notify.modal-warning .modal-header {
  background-color: #fb3; }

.modal-dialog.modal-notify.modal-warning .fas, .modal-dialog.modal-notify.modal-warning .fab, .modal-dialog.modal-notify.modal-warning .far {
  color: #fb3; }

.modal-dialog.modal-notify.modal-warning .badge {
  background-color: #fb3; }

.modal-dialog.modal-notify.modal-warning .btn .fas,
.modal-dialog.modal-notify.modal-warning .btn .fab,
.modal-dialog.modal-notify.modal-warning .btn .far {
  color: #fff; }

.modal-dialog.modal-notify.modal-warning .btn.btn-outline-warning .fas,
.modal-dialog.modal-notify.modal-warning .btn.btn-outline-warning .fab,
.modal-dialog.modal-notify.modal-warning .btn.btn-outline-warning .far {
  color: #fb3; }

.modal-dialog.modal-notify.modal-success .modal-header {
  background-color: #00c851; }

.modal-dialog.modal-notify.modal-success .fas, .modal-dialog.modal-notify.modal-success .fab, .modal-dialog.modal-notify.modal-success .far {
  color: #00c851; }

.modal-dialog.modal-notify.modal-success .badge {
  background-color: #00c851; }

.modal-dialog.modal-notify.modal-success .btn .fas,
.modal-dialog.modal-notify.modal-success .btn .fab,
.modal-dialog.modal-notify.modal-success .btn .far {
  color: #fff; }

.modal-dialog.modal-notify.modal-success .btn.btn-outline-success .fas,
.modal-dialog.modal-notify.modal-success .btn.btn-outline-success .fab,
.modal-dialog.modal-notify.modal-success .btn.btn-outline-success .far {
  color: #00c851; }

.modal-dialog.modal-notify.modal-info .modal-header {
  background-color: #33b5e5; }

.modal-dialog.modal-notify.modal-info .fas, .modal-dialog.modal-notify.modal-info .fab, .modal-dialog.modal-notify.modal-info .far {
  color: #33b5e5; }

.modal-dialog.modal-notify.modal-info .badge {
  background-color: #33b5e5; }

.modal-dialog.modal-notify.modal-info .btn .fas,
.modal-dialog.modal-notify.modal-info .btn .fab,
.modal-dialog.modal-notify.modal-info .btn .far {
  color: #fff; }

.modal-dialog.modal-notify.modal-info .btn.btn-outline-info .fas,
.modal-dialog.modal-notify.modal-info .btn.btn-outline-info .fab,
.modal-dialog.modal-notify.modal-info .btn.btn-outline-info .far {
  color: #33b5e5; }

.modal {
  padding-right: 0 !important; }
  @media (min-width: 768px) {
    .modal .modal-dialog.modal-top {
      top: 0; }
    .modal .modal-dialog.modal-left {
      left: 0; }
    .modal .modal-dialog.modal-right {
      right: 0; }
    .modal .modal-dialog.modal-bottom {
      bottom: 0; }
    .modal .modal-dialog.modal-top-left {
      top: 10px;
      left: 10px; }
    .modal .modal-dialog.modal-top-right {
      top: 10px;
      right: 10px; }
    .modal .modal-dialog.modal-bottom-left {
      bottom: 10px;
      left: 10px; }
    .modal .modal-dialog.modal-bottom-right {
      right: 10px;
      bottom: 10px; } }
  .modal.fade.top:not(.show) .modal-dialog {
    transform: translate3d(0, -25%, 0); }
  .modal.fade.left:not(.show) .modal-dialog {
    transform: translate3d(-25%, 0, 0); }
  .modal.fade.right:not(.show) .modal-dialog {
    transform: translate3d(25%, 0, 0); }
  .modal.fade.bottom:not(.show) .modal-dialog {
    transform: translate3d(0, 25%, 0); }
  @media (min-width: 992px) {
    .modal.modal-scrolling {
      position: relative; }
      .modal.modal-scrolling .modal-dialog {
        position: fixed;
        z-index: 1050; }
    .modal.modal-content-clickable {
      top: auto;
      bottom: auto; }
      .modal.modal-content-clickable .modal-dialog {
        position: fixed; }
    .modal .modal-fluid {
      width: 100%;
      max-width: 100%; }
      .modal .modal-fluid .modal-content {
        width: 100%; }
    .modal .modal-frame {
      position: absolute;
      width: 100%;
      max-width: 100% !important;
      margin: 0 !important; }
      .modal .modal-frame.modal-bottom {
        bottom: 0; }
    .modal .modal-full-height {
      position: absolute;
      top: 0;
      right: 0;
      display: flex;
      width: 400px;
      height: auto;
      min-height: 100%;
      margin: 0; }
      .modal .modal-full-height.modal-top, .modal .modal-full-height.modal-bottom {
        display: block;
        width: 100%;
        max-width: 100%;
        height: auto; }
      .modal .modal-full-height.modal-top {
        bottom: auto; }
      .modal .modal-full-height.modal-bottom {
        top: auto;
        min-height: 0; }
      .modal .modal-full-height .modal-content {
        width: 100%; }
      .modal .modal-full-height.modal-lg {
        width: 90%;
        max-width: 90%; } }
    @media (min-width: 992px) and (min-width: 992px) {
      .modal .modal-full-height.modal-lg {
        width: 800px;
        max-width: 800px; } }
    @media (min-width: 992px) and (min-width: 1200px) {
      .modal .modal-full-height.modal-lg {
        width: 1000px;
        max-width: 1000px; } }
  @media (min-width: 992px) {
    .modal .modal-side {
      position: absolute;
      right: 10px;
      bottom: 10px;
      width: 400px;
      margin: 0; } }

.carousel .carousel-control-prev-icon,
.carousel .carousel-control-next-icon {
  width: 20px;
  height: 20px; }

.carousel .carousel-control-prev-icon {
  background-image: url(../img/svg/arrow_left.svg); }

.carousel .carousel-control-next-icon {
  background-image: url(../img/svg/arrow_right.svg); }

.carousel .carousel-indicators li {
  width: 0.625rem;
  height: 0.625rem;
  cursor: pointer;
  border-radius: 50%; }

.carousel-fade .carousel-item {
  opacity: 0;
  transition-duration: 0.6s;
  transition-property: opacity; }

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  opacity: 1; }

.carousel-fade .carousel-item-left.active,
.carousel-fade .carousel-item-right.active {
  opacity: 0; }

.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-left.active,
.carousel-fade .carousel-item-prev.active {
  transform: translateX(0); }
  @supports (transform-style: preserve-3d) {
    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-left.active,
    .carousel-fade .carousel-item-prev.active {
      transform: translate3d(0, 0, 0); } }

.md-form {
  position: relative;
  margin-top: 1.5rem;
  margin-bottom: 1.5rem; }
  .md-form input:not([type]),
  .md-form input[type="text"]:not(.browser-default),
  .md-form input[type="password"]:not(.browser-default),
  .md-form input[type="email"]:not(.browser-default),
  .md-form input[type="url"]:not(.browser-default),
  .md-form input[type="time"]:not(.browser-default),
  .md-form input[type="date"]:not(.browser-default),
  .md-form input[type="datetime"]:not(.browser-default),
  .md-form input[type="datetime-local"]:not(.browser-default),
  .md-form input[type="tel"]:not(.browser-default),
  .md-form input[type="number"]:not(.browser-default),
  .md-form input[type="search"]:not(.browser-default),
  .md-form input[type="search-md"],
  .md-form textarea.md-textarea {
    box-sizing: content-box;
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #ced4da;
    border-radius: 0;
    outline: none;
    box-shadow: none;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
    .md-form input:not([type]):focus:not([readonly]),
    .md-form input[type="text"]:not(.browser-default):focus:not([readonly]),
    .md-form input[type="password"]:not(.browser-default):focus:not([readonly]),
    .md-form input[type="email"]:not(.browser-default):focus:not([readonly]),
    .md-form input[type="url"]:not(.browser-default):focus:not([readonly]),
    .md-form input[type="time"]:not(.browser-default):focus:not([readonly]),
    .md-form input[type="date"]:not(.browser-default):focus:not([readonly]),
    .md-form input[type="datetime"]:not(.browser-default):focus:not([readonly]),
    .md-form input[type="datetime-local"]:not(.browser-default):focus:not([readonly]),
    .md-form input[type="tel"]:not(.browser-default):focus:not([readonly]),
    .md-form input[type="number"]:not(.browser-default):focus:not([readonly]),
    .md-form input[type="search"]:not(.browser-default):focus:not([readonly]),
    .md-form input[type="search-md"]:focus:not([readonly]),
    .md-form textarea.md-textarea:focus:not([readonly]) {
      border-bottom: 1px solid #4285f4;
      box-shadow: 0 1px 0 0 #4285f4; }
      .md-form input:not([type]):focus:not([readonly]) + label,
      .md-form input[type="text"]:not(.browser-default):focus:not([readonly]) + label,
      .md-form input[type="password"]:not(.browser-default):focus:not([readonly]) + label,
      .md-form input[type="email"]:not(.browser-default):focus:not([readonly]) + label,
      .md-form input[type="url"]:not(.browser-default):focus:not([readonly]) + label,
      .md-form input[type="time"]:not(.browser-default):focus:not([readonly]) + label,
      .md-form input[type="date"]:not(.browser-default):focus:not([readonly]) + label,
      .md-form input[type="datetime"]:not(.browser-default):focus:not([readonly]) + label,
      .md-form input[type="datetime-local"]:not(.browser-default):focus:not([readonly]) + label,
      .md-form input[type="tel"]:not(.browser-default):focus:not([readonly]) + label,
      .md-form input[type="number"]:not(.browser-default):focus:not([readonly]) + label,
      .md-form input[type="search"]:not(.browser-default):focus:not([readonly]) + label,
      .md-form input[type="search-md"]:focus:not([readonly]) + label,
      .md-form textarea.md-textarea:focus:not([readonly]) + label {
        color: #4285f4; }
    .md-form input:not([type]) + label::after,
    .md-form input[type="text"]:not(.browser-default) + label::after,
    .md-form input[type="password"]:not(.browser-default) + label::after,
    .md-form input[type="email"]:not(.browser-default) + label::after,
    .md-form input[type="url"]:not(.browser-default) + label::after,
    .md-form input[type="time"]:not(.browser-default) + label::after,
    .md-form input[type="date"]:not(.browser-default) + label::after,
    .md-form input[type="datetime"]:not(.browser-default) + label::after,
    .md-form input[type="datetime-local"]:not(.browser-default) + label::after,
    .md-form input[type="tel"]:not(.browser-default) + label::after,
    .md-form input[type="number"]:not(.browser-default) + label::after,
    .md-form input[type="search"]:not(.browser-default) + label::after,
    .md-form input[type="search-md"] + label::after,
    .md-form textarea.md-textarea + label::after {
      position: absolute;
      top: 65px;
      display: block;
      content: "";
      opacity: 0;
      transition: 0.2s opacity ease-out, 0.2s color ease-out; }
    .md-form input:not([type]).valid, .md-form input:not([type]):focus.valid,
    .md-form input[type="text"]:not(.browser-default).valid,
    .md-form input[type="text"]:not(.browser-default):focus.valid,
    .md-form input[type="password"]:not(.browser-default).valid,
    .md-form input[type="password"]:not(.browser-default):focus.valid,
    .md-form input[type="email"]:not(.browser-default).valid,
    .md-form input[type="email"]:not(.browser-default):focus.valid,
    .md-form input[type="url"]:not(.browser-default).valid,
    .md-form input[type="url"]:not(.browser-default):focus.valid,
    .md-form input[type="time"]:not(.browser-default).valid,
    .md-form input[type="time"]:not(.browser-default):focus.valid,
    .md-form input[type="date"]:not(.browser-default).valid,
    .md-form input[type="date"]:not(.browser-default):focus.valid,
    .md-form input[type="datetime"]:not(.browser-default).valid,
    .md-form input[type="datetime"]:not(.browser-default):focus.valid,
    .md-form input[type="datetime-local"]:not(.browser-default).valid,
    .md-form input[type="datetime-local"]:not(.browser-default):focus.valid,
    .md-form input[type="tel"]:not(.browser-default).valid,
    .md-form input[type="tel"]:not(.browser-default):focus.valid,
    .md-form input[type="number"]:not(.browser-default).valid,
    .md-form input[type="number"]:not(.browser-default):focus.valid,
    .md-form input[type="search"]:not(.browser-default).valid,
    .md-form input[type="search"]:not(.browser-default):focus.valid,
    .md-form input[type="search-md"].valid,
    .md-form input[type="search-md"]:focus.valid,
    .md-form textarea.md-textarea.valid,
    .md-form textarea.md-textarea:focus.valid {
      border-bottom: 1px solid #00c851;
      box-shadow: 0 1px 0 0 #00c851; }
    .md-form input:not([type]).valid + label:after,
    .md-form input:not([type]):focus.valid + label:after,
    .md-form input[type="text"]:not(.browser-default).valid + label:after,
    .md-form input[type="text"]:not(.browser-default):focus.valid + label:after,
    .md-form input[type="password"]:not(.browser-default).valid + label:after,
    .md-form input[type="password"]:not(.browser-default):focus.valid + label:after,
    .md-form input[type="email"]:not(.browser-default).valid + label:after,
    .md-form input[type="email"]:not(.browser-default):focus.valid + label:after,
    .md-form input[type="url"]:not(.browser-default).valid + label:after,
    .md-form input[type="url"]:not(.browser-default):focus.valid + label:after,
    .md-form input[type="time"]:not(.browser-default).valid + label:after,
    .md-form input[type="time"]:not(.browser-default):focus.valid + label:after,
    .md-form input[type="date"]:not(.browser-default).valid + label:after,
    .md-form input[type="date"]:not(.browser-default):focus.valid + label:after,
    .md-form input[type="datetime"]:not(.browser-default).valid + label:after,
    .md-form input[type="datetime"]:not(.browser-default):focus.valid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default).valid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default):focus.valid + label:after,
    .md-form input[type="tel"]:not(.browser-default).valid + label:after,
    .md-form input[type="tel"]:not(.browser-default):focus.valid + label:after,
    .md-form input[type="number"]:not(.browser-default).valid + label:after,
    .md-form input[type="number"]:not(.browser-default):focus.valid + label:after,
    .md-form input[type="search"]:not(.browser-default).valid + label:after,
    .md-form input[type="search"]:not(.browser-default):focus.valid + label:after,
    .md-form input[type="search-md"].valid + label:after,
    .md-form input[type="search-md"]:focus.valid + label:after,
    .md-form textarea.md-textarea.valid + label:after,
    .md-form textarea.md-textarea:focus.valid + label:after {
      color: #00c851;
      content: attr(data-success);
      opacity: 1; }
    .md-form input:not([type]).invalid, .md-form input:not([type]):focus.invalid,
    .md-form input[type="text"]:not(.browser-default).invalid,
    .md-form input[type="text"]:not(.browser-default):focus.invalid,
    .md-form input[type="password"]:not(.browser-default).invalid,
    .md-form input[type="password"]:not(.browser-default):focus.invalid,
    .md-form input[type="email"]:not(.browser-default).invalid,
    .md-form input[type="email"]:not(.browser-default):focus.invalid,
    .md-form input[type="url"]:not(.browser-default).invalid,
    .md-form input[type="url"]:not(.browser-default):focus.invalid,
    .md-form input[type="time"]:not(.browser-default).invalid,
    .md-form input[type="time"]:not(.browser-default):focus.invalid,
    .md-form input[type="date"]:not(.browser-default).invalid,
    .md-form input[type="date"]:not(.browser-default):focus.invalid,
    .md-form input[type="datetime"]:not(.browser-default).invalid,
    .md-form input[type="datetime"]:not(.browser-default):focus.invalid,
    .md-form input[type="datetime-local"]:not(.browser-default).invalid,
    .md-form input[type="datetime-local"]:not(.browser-default):focus.invalid,
    .md-form input[type="tel"]:not(.browser-default).invalid,
    .md-form input[type="tel"]:not(.browser-default):focus.invalid,
    .md-form input[type="number"]:not(.browser-default).invalid,
    .md-form input[type="number"]:not(.browser-default):focus.invalid,
    .md-form input[type="search"]:not(.browser-default).invalid,
    .md-form input[type="search"]:not(.browser-default):focus.invalid,
    .md-form input[type="search-md"].invalid,
    .md-form input[type="search-md"]:focus.invalid,
    .md-form textarea.md-textarea.invalid,
    .md-form textarea.md-textarea:focus.invalid {
      border-bottom: 1px solid #f44336;
      box-shadow: 0 1px 0 0 #f44336; }
    .md-form input:not([type]).invalid + label:after,
    .md-form input:not([type]):focus.invalid + label:after,
    .md-form input[type="text"]:not(.browser-default).invalid + label:after,
    .md-form input[type="text"]:not(.browser-default):focus.invalid + label:after,
    .md-form input[type="password"]:not(.browser-default).invalid + label:after,
    .md-form input[type="password"]:not(.browser-default):focus.invalid + label:after,
    .md-form input[type="email"]:not(.browser-default).invalid + label:after,
    .md-form input[type="email"]:not(.browser-default):focus.invalid + label:after,
    .md-form input[type="url"]:not(.browser-default).invalid + label:after,
    .md-form input[type="url"]:not(.browser-default):focus.invalid + label:after,
    .md-form input[type="time"]:not(.browser-default).invalid + label:after,
    .md-form input[type="time"]:not(.browser-default):focus.invalid + label:after,
    .md-form input[type="date"]:not(.browser-default).invalid + label:after,
    .md-form input[type="date"]:not(.browser-default):focus.invalid + label:after,
    .md-form input[type="datetime"]:not(.browser-default).invalid + label:after,
    .md-form input[type="datetime"]:not(.browser-default):focus.invalid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default).invalid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default):focus.invalid + label:after,
    .md-form input[type="tel"]:not(.browser-default).invalid + label:after,
    .md-form input[type="tel"]:not(.browser-default):focus.invalid + label:after,
    .md-form input[type="number"]:not(.browser-default).invalid + label:after,
    .md-form input[type="number"]:not(.browser-default):focus.invalid + label:after,
    .md-form input[type="search"]:not(.browser-default).invalid + label:after,
    .md-form input[type="search"]:not(.browser-default):focus.invalid + label:after,
    .md-form input[type="search-md"].invalid + label:after,
    .md-form input[type="search-md"]:focus.invalid + label:after,
    .md-form textarea.md-textarea.invalid + label:after,
    .md-form textarea.md-textarea:focus.invalid + label:after {
      color: #f44336;
      content: attr(data-error);
      opacity: 1; }
    .md-form input:not([type]).form-control.valid + label:after,
    .md-form input:not([type]).form-control:focus.valid + label:after,
    .md-form input[type="text"]:not(.browser-default).form-control.valid + label:after,
    .md-form input[type="text"]:not(.browser-default).form-control:focus.valid + label:after,
    .md-form input[type="password"]:not(.browser-default).form-control.valid + label:after,
    .md-form input[type="password"]:not(.browser-default).form-control:focus.valid + label:after,
    .md-form input[type="email"]:not(.browser-default).form-control.valid + label:after,
    .md-form input[type="email"]:not(.browser-default).form-control:focus.valid + label:after,
    .md-form input[type="url"]:not(.browser-default).form-control.valid + label:after,
    .md-form input[type="url"]:not(.browser-default).form-control:focus.valid + label:after,
    .md-form input[type="time"]:not(.browser-default).form-control.valid + label:after,
    .md-form input[type="time"]:not(.browser-default).form-control:focus.valid + label:after,
    .md-form input[type="date"]:not(.browser-default).form-control.valid + label:after,
    .md-form input[type="date"]:not(.browser-default).form-control:focus.valid + label:after,
    .md-form input[type="datetime"]:not(.browser-default).form-control.valid + label:after,
    .md-form input[type="datetime"]:not(.browser-default).form-control:focus.valid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default).form-control.valid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default).form-control:focus.valid + label:after,
    .md-form input[type="tel"]:not(.browser-default).form-control.valid + label:after,
    .md-form input[type="tel"]:not(.browser-default).form-control:focus.valid + label:after,
    .md-form input[type="number"]:not(.browser-default).form-control.valid + label:after,
    .md-form input[type="number"]:not(.browser-default).form-control:focus.valid + label:after,
    .md-form input[type="search"]:not(.browser-default).form-control.valid + label:after,
    .md-form input[type="search"]:not(.browser-default).form-control:focus.valid + label:after,
    .md-form input[type="search-md"].form-control.valid + label:after,
    .md-form input[type="search-md"].form-control:focus.valid + label:after,
    .md-form textarea.md-textarea.form-control.valid + label:after,
    .md-form textarea.md-textarea.form-control:focus.valid + label:after {
      top: 4.1rem; }
    .md-form input:not([type]).form-control.invalid + label:after,
    .md-form input:not([type]).form-control:focus.invalid + label:after,
    .md-form input[type="text"]:not(.browser-default).form-control.invalid + label:after,
    .md-form input[type="text"]:not(.browser-default).form-control:focus.invalid + label:after,
    .md-form input[type="password"]:not(.browser-default).form-control.invalid + label:after,
    .md-form input[type="password"]:not(.browser-default).form-control:focus.invalid + label:after,
    .md-form input[type="email"]:not(.browser-default).form-control.invalid + label:after,
    .md-form input[type="email"]:not(.browser-default).form-control:focus.invalid + label:after,
    .md-form input[type="url"]:not(.browser-default).form-control.invalid + label:after,
    .md-form input[type="url"]:not(.browser-default).form-control:focus.invalid + label:after,
    .md-form input[type="time"]:not(.browser-default).form-control.invalid + label:after,
    .md-form input[type="time"]:not(.browser-default).form-control:focus.invalid + label:after,
    .md-form input[type="date"]:not(.browser-default).form-control.invalid + label:after,
    .md-form input[type="date"]:not(.browser-default).form-control:focus.invalid + label:after,
    .md-form input[type="datetime"]:not(.browser-default).form-control.invalid + label:after,
    .md-form input[type="datetime"]:not(.browser-default).form-control:focus.invalid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default).form-control.invalid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default).form-control:focus.invalid + label:after,
    .md-form input[type="tel"]:not(.browser-default).form-control.invalid + label:after,
    .md-form input[type="tel"]:not(.browser-default).form-control:focus.invalid + label:after,
    .md-form input[type="number"]:not(.browser-default).form-control.invalid + label:after,
    .md-form input[type="number"]:not(.browser-default).form-control:focus.invalid + label:after,
    .md-form input[type="search"]:not(.browser-default).form-control.invalid + label:after,
    .md-form input[type="search"]:not(.browser-default).form-control:focus.invalid + label:after,
    .md-form input[type="search-md"].form-control.invalid + label:after,
    .md-form input[type="search-md"].form-control:focus.invalid + label:after,
    .md-form textarea.md-textarea.form-control.invalid + label:after,
    .md-form textarea.md-textarea.form-control:focus.invalid + label:after {
      top: 4rem; }
    .md-form input:not([type]).form-control-lg.valid + label:after,
    .md-form input:not([type]).form-control-lg:focus.valid + label:after,
    .md-form input[type="text"]:not(.browser-default).form-control-lg.valid + label:after,
    .md-form input[type="text"]:not(.browser-default).form-control-lg:focus.valid + label:after,
    .md-form input[type="password"]:not(.browser-default).form-control-lg.valid + label:after,
    .md-form input[type="password"]:not(.browser-default).form-control-lg:focus.valid + label:after,
    .md-form input[type="email"]:not(.browser-default).form-control-lg.valid + label:after,
    .md-form input[type="email"]:not(.browser-default).form-control-lg:focus.valid + label:after,
    .md-form input[type="url"]:not(.browser-default).form-control-lg.valid + label:after,
    .md-form input[type="url"]:not(.browser-default).form-control-lg:focus.valid + label:after,
    .md-form input[type="time"]:not(.browser-default).form-control-lg.valid + label:after,
    .md-form input[type="time"]:not(.browser-default).form-control-lg:focus.valid + label:after,
    .md-form input[type="date"]:not(.browser-default).form-control-lg.valid + label:after,
    .md-form input[type="date"]:not(.browser-default).form-control-lg:focus.valid + label:after,
    .md-form input[type="datetime"]:not(.browser-default).form-control-lg.valid + label:after,
    .md-form input[type="datetime"]:not(.browser-default).form-control-lg:focus.valid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default).form-control-lg.valid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default).form-control-lg:focus.valid + label:after,
    .md-form input[type="tel"]:not(.browser-default).form-control-lg.valid + label:after,
    .md-form input[type="tel"]:not(.browser-default).form-control-lg:focus.valid + label:after,
    .md-form input[type="number"]:not(.browser-default).form-control-lg.valid + label:after,
    .md-form input[type="number"]:not(.browser-default).form-control-lg:focus.valid + label:after,
    .md-form input[type="search"]:not(.browser-default).form-control-lg.valid + label:after,
    .md-form input[type="search"]:not(.browser-default).form-control-lg:focus.valid + label:after,
    .md-form input[type="search-md"].form-control-lg.valid + label:after,
    .md-form input[type="search-md"].form-control-lg:focus.valid + label:after,
    .md-form textarea.md-textarea.form-control-lg.valid + label:after,
    .md-form textarea.md-textarea.form-control-lg:focus.valid + label:after {
      top: 4.6rem; }
    .md-form input:not([type]).form-control-lg.invalid + label:after,
    .md-form input:not([type]).form-control-lg:focus.invalid + label:after,
    .md-form input[type="text"]:not(.browser-default).form-control-lg.invalid + label:after,
    .md-form input[type="text"]:not(.browser-default).form-control-lg:focus.invalid + label:after,
    .md-form input[type="password"]:not(.browser-default).form-control-lg.invalid + label:after,
    .md-form input[type="password"]:not(.browser-default).form-control-lg:focus.invalid + label:after,
    .md-form input[type="email"]:not(.browser-default).form-control-lg.invalid + label:after,
    .md-form input[type="email"]:not(.browser-default).form-control-lg:focus.invalid + label:after,
    .md-form input[type="url"]:not(.browser-default).form-control-lg.invalid + label:after,
    .md-form input[type="url"]:not(.browser-default).form-control-lg:focus.invalid + label:after,
    .md-form input[type="time"]:not(.browser-default).form-control-lg.invalid + label:after,
    .md-form input[type="time"]:not(.browser-default).form-control-lg:focus.invalid + label:after,
    .md-form input[type="date"]:not(.browser-default).form-control-lg.invalid + label:after,
    .md-form input[type="date"]:not(.browser-default).form-control-lg:focus.invalid + label:after,
    .md-form input[type="datetime"]:not(.browser-default).form-control-lg.invalid + label:after,
    .md-form input[type="datetime"]:not(.browser-default).form-control-lg:focus.invalid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default).form-control-lg.invalid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default).form-control-lg:focus.invalid + label:after,
    .md-form input[type="tel"]:not(.browser-default).form-control-lg.invalid + label:after,
    .md-form input[type="tel"]:not(.browser-default).form-control-lg:focus.invalid + label:after,
    .md-form input[type="number"]:not(.browser-default).form-control-lg.invalid + label:after,
    .md-form input[type="number"]:not(.browser-default).form-control-lg:focus.invalid + label:after,
    .md-form input[type="search"]:not(.browser-default).form-control-lg.invalid + label:after,
    .md-form input[type="search"]:not(.browser-default).form-control-lg:focus.invalid + label:after,
    .md-form input[type="search-md"].form-control-lg.invalid + label:after,
    .md-form input[type="search-md"].form-control-lg:focus.invalid + label:after,
    .md-form textarea.md-textarea.form-control-lg.invalid + label:after,
    .md-form textarea.md-textarea.form-control-lg:focus.invalid + label:after {
      top: 4.6rem; }
    .md-form input:not([type]).form-control-sm.valid + label:after,
    .md-form input:not([type]).form-control-sm:focus.valid + label:after,
    .md-form input[type="text"]:not(.browser-default).form-control-sm.valid + label:after,
    .md-form input[type="text"]:not(.browser-default).form-control-sm:focus.valid + label:after,
    .md-form input[type="password"]:not(.browser-default).form-control-sm.valid + label:after,
    .md-form input[type="password"]:not(.browser-default).form-control-sm:focus.valid + label:after,
    .md-form input[type="email"]:not(.browser-default).form-control-sm.valid + label:after,
    .md-form input[type="email"]:not(.browser-default).form-control-sm:focus.valid + label:after,
    .md-form input[type="url"]:not(.browser-default).form-control-sm.valid + label:after,
    .md-form input[type="url"]:not(.browser-default).form-control-sm:focus.valid + label:after,
    .md-form input[type="time"]:not(.browser-default).form-control-sm.valid + label:after,
    .md-form input[type="time"]:not(.browser-default).form-control-sm:focus.valid + label:after,
    .md-form input[type="date"]:not(.browser-default).form-control-sm.valid + label:after,
    .md-form input[type="date"]:not(.browser-default).form-control-sm:focus.valid + label:after,
    .md-form input[type="datetime"]:not(.browser-default).form-control-sm.valid + label:after,
    .md-form input[type="datetime"]:not(.browser-default).form-control-sm:focus.valid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default).form-control-sm.valid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default).form-control-sm:focus.valid + label:after,
    .md-form input[type="tel"]:not(.browser-default).form-control-sm.valid + label:after,
    .md-form input[type="tel"]:not(.browser-default).form-control-sm:focus.valid + label:after,
    .md-form input[type="number"]:not(.browser-default).form-control-sm.valid + label:after,
    .md-form input[type="number"]:not(.browser-default).form-control-sm:focus.valid + label:after,
    .md-form input[type="search"]:not(.browser-default).form-control-sm.valid + label:after,
    .md-form input[type="search"]:not(.browser-default).form-control-sm:focus.valid + label:after,
    .md-form input[type="search-md"].form-control-sm.valid + label:after,
    .md-form input[type="search-md"].form-control-sm:focus.valid + label:after,
    .md-form textarea.md-textarea.form-control-sm.valid + label:after,
    .md-form textarea.md-textarea.form-control-sm:focus.valid + label:after {
      top: 3.7rem; }
    .md-form input:not([type]).form-control-sm.invalid + label:after,
    .md-form input:not([type]).form-control-sm:focus.invalid + label:after,
    .md-form input[type="text"]:not(.browser-default).form-control-sm.invalid + label:after,
    .md-form input[type="text"]:not(.browser-default).form-control-sm:focus.invalid + label:after,
    .md-form input[type="password"]:not(.browser-default).form-control-sm.invalid + label:after,
    .md-form input[type="password"]:not(.browser-default).form-control-sm:focus.invalid + label:after,
    .md-form input[type="email"]:not(.browser-default).form-control-sm.invalid + label:after,
    .md-form input[type="email"]:not(.browser-default).form-control-sm:focus.invalid + label:after,
    .md-form input[type="url"]:not(.browser-default).form-control-sm.invalid + label:after,
    .md-form input[type="url"]:not(.browser-default).form-control-sm:focus.invalid + label:after,
    .md-form input[type="time"]:not(.browser-default).form-control-sm.invalid + label:after,
    .md-form input[type="time"]:not(.browser-default).form-control-sm:focus.invalid + label:after,
    .md-form input[type="date"]:not(.browser-default).form-control-sm.invalid + label:after,
    .md-form input[type="date"]:not(.browser-default).form-control-sm:focus.invalid + label:after,
    .md-form input[type="datetime"]:not(.browser-default).form-control-sm.invalid + label:after,
    .md-form input[type="datetime"]:not(.browser-default).form-control-sm:focus.invalid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default).form-control-sm.invalid + label:after,
    .md-form input[type="datetime-local"]:not(.browser-default).form-control-sm:focus.invalid + label:after,
    .md-form input[type="tel"]:not(.browser-default).form-control-sm.invalid + label:after,
    .md-form input[type="tel"]:not(.browser-default).form-control-sm:focus.invalid + label:after,
    .md-form input[type="number"]:not(.browser-default).form-control-sm.invalid + label:after,
    .md-form input[type="number"]:not(.browser-default).form-control-sm:focus.invalid + label:after,
    .md-form input[type="search"]:not(.browser-default).form-control-sm.invalid + label:after,
    .md-form input[type="search"]:not(.browser-default).form-control-sm:focus.invalid + label:after,
    .md-form input[type="search-md"].form-control-sm.invalid + label:after,
    .md-form input[type="search-md"].form-control-sm:focus.invalid + label:after,
    .md-form textarea.md-textarea.form-control-sm.invalid + label:after,
    .md-form textarea.md-textarea.form-control-sm:focus.invalid + label:after {
      top: 3.6rem; }
  .md-form > input[type="date"]:not(.browser-default) + label {
    transform: translateY(-27px) scale(0.8);
    transform-origin: 0 0; }
  .md-form > input[type]:-webkit-autofill:not(.browser-default):not([type="search"]) + label,
  .md-form > input[type="time"]:not(.browser-default) + label {
    font-size: .8rem;
    transform: translateY(-25px);
    transform-origin: 0 0; }
  .md-form .was-validated input[type="text"]:valid + label {
    color: #00c851 !important; }
  .md-form .was-validated input[type="text"]:invalid + label {
    color: #f44336 !important; }
  .md-form .was-validated .form-control:valid:focus {
    box-shadow: 0 1px 0 0 #00c851 !important; }
  .md-form .was-validated .form-control:valid {
    border-color: #00c851 !important; }
  .md-form .was-validated .form-control:invalid:focus {
    box-shadow: 0 1px 0 0 #f44336 !important; }
  .md-form .was-validated .form-control:invalid {
    border-color: #f44336 !important; }
  .md-form .form-control {
    height: auto;
    padding: 0.6rem 0 0.4rem 0;
    margin: 0 0 0.5rem 0;
    background-color: transparent;
    border-radius: 0; }
    .md-form .form-control:focus {
      box-shadow: none; }
    .md-form .form-control:disabled, .md-form .form-control[readonly] {
      background-color: transparent;
      border-bottom: 1px solid #bdbdbd; }
    .md-form .form-control.is-valid {
      border-color: #00c851; }
      .md-form .form-control.is-valid:focus {
        border-color: #00c851 !important;
        box-shadow: 0 1px 0 0 #00c851 !important; }
    .md-form .form-control.is-invalid {
      border-color: #f44336; }
      .md-form .form-control.is-invalid:focus {
        border-color: #f44336 !important;
        box-shadow: 0 1px 0 0 #f44336 !important; }
    .md-form .form-control.is-valid, .md-form .form-control.is-invalid {
      background-position: center right !important; }
  .md-form .validate {
    margin-bottom: 2.5rem; }
  .md-form label {
    font-size: 1rem; }
    .md-form label.active {
      font-size: 1rem; }
  .md-form .prefix {
    top: 0.25rem;
    font-size: 1.75rem; }
    .md-form .prefix ~ input,
    .md-form .prefix ~ textarea {
      width: calc(100% - 2.5rem);
      margin-left: 2.5rem; }
    .md-form .prefix ~ label {
      margin-left: 2.5rem; }
    .md-form .prefix ~ .form-text {
      margin-left: 2.6rem; }
  .md-form label {
    position: absolute;
    top: 0;
    left: 0;
    font-size: 1rem;
    color: #757575;
    cursor: text;
    transition: transform .2s ease-out, color .2s ease-out;
    transform: translateY(12px);
    transform-origin: 0% 100%; }
    .md-form label.active {
      transform: translateY(-14px) scale(0.8); }
  .md-form .prefix {
    position: absolute;
    transition: color 0.2s; }
    .md-form .prefix.active {
      color: #4285f4; }
  .md-form.form-lg .validate {
    margin-bottom: 2.8rem; }
  .md-form.form-lg label {
    font-size: 1.25rem; }
    .md-form.form-lg label.active {
      font-size: 1.15rem; }
  .md-form.form-lg .prefix {
    top: 0.4rem;
    font-size: 2rem; }
    .md-form.form-lg .prefix ~ input,
    .md-form.form-lg .prefix ~ textarea {
      width: calc(100% - 3rem);
      margin-left: 3rem; }
    .md-form.form-lg .prefix ~ label {
      margin-left: 3rem; }
    .md-form.form-lg .prefix ~ .form-text {
      margin-left: 3.1rem; }
  .md-form.form-sm .validate {
    margin-bottom: 2.3rem; }
  .md-form.form-sm label {
    font-size: 0.875rem; }
    .md-form.form-sm label.active {
      font-size: 0.95rem; }
  .md-form.form-sm .prefix {
    top: 0.35rem;
    font-size: 1.5rem; }
    .md-form.form-sm .prefix ~ input,
    .md-form.form-sm .prefix ~ textarea {
      width: calc(100% - 2rem);
      margin-left: 2rem; }
    .md-form.form-sm .prefix ~ label {
      margin-left: 2rem; }
    .md-form.form-sm .prefix ~ .form-text {
      margin-left: 2rem; }
  .md-form textarea.md-textarea {
    padding: 1.5rem 0;
    overflow-y: hidden; }
  .md-form textarea.md-textarea-auto {
    padding: 0;
    padding-top: 1.5rem; }
  .md-form.md-outline {
    position: relative;
    margin-top: 1.5rem;
    margin-bottom: 1.5rem; }
    .md-form.md-outline input[type="text"],
    .md-form.md-outline input[type="password"],
    .md-form.md-outline input[type="email"],
    .md-form.md-outline input[type="url"],
    .md-form.md-outline input[type="time"],
    .md-form.md-outline input[type="date"],
    .md-form.md-outline input[type="datetime-local"],
    .md-form.md-outline input[type="tel"],
    .md-form.md-outline input[type="number"],
    .md-form.md-outline input[type="search-md"],
    .md-form.md-outline input[type="search"],
    .md-form.md-outline textarea.md-textarea {
      box-sizing: border-box;
      background-color: transparent;
      border: 1px solid #dadce0;
      border-radius: 4px;
      outline: none;
      box-shadow: none;
      transition: all .3s; }
      .md-form.md-outline input[type="text"]:focus:not([readonly]),
      .md-form.md-outline input[type="password"]:focus:not([readonly]),
      .md-form.md-outline input[type="email"]:focus:not([readonly]),
      .md-form.md-outline input[type="url"]:focus:not([readonly]),
      .md-form.md-outline input[type="time"]:focus:not([readonly]),
      .md-form.md-outline input[type="date"]:focus:not([readonly]),
      .md-form.md-outline input[type="datetime-local"]:focus:not([readonly]),
      .md-form.md-outline input[type="tel"]:focus:not([readonly]),
      .md-form.md-outline input[type="number"]:focus:not([readonly]),
      .md-form.md-outline input[type="search-md"]:focus:not([readonly]),
      .md-form.md-outline input[type="search"]:focus:not([readonly]),
      .md-form.md-outline textarea.md-textarea:focus:not([readonly]) {
        border-color: #4285f4;
        box-shadow: inset 0 0 0 1px #4285f4; }
        .md-form.md-outline input[type="text"]:focus:not([readonly]) + label,
        .md-form.md-outline input[type="password"]:focus:not([readonly]) + label,
        .md-form.md-outline input[type="email"]:focus:not([readonly]) + label,
        .md-form.md-outline input[type="url"]:focus:not([readonly]) + label,
        .md-form.md-outline input[type="time"]:focus:not([readonly]) + label,
        .md-form.md-outline input[type="date"]:focus:not([readonly]) + label,
        .md-form.md-outline input[type="datetime-local"]:focus:not([readonly]) + label,
        .md-form.md-outline input[type="tel"]:focus:not([readonly]) + label,
        .md-form.md-outline input[type="number"]:focus:not([readonly]) + label,
        .md-form.md-outline input[type="search-md"]:focus:not([readonly]) + label,
        .md-form.md-outline input[type="search"]:focus:not([readonly]) + label,
        .md-form.md-outline textarea.md-textarea:focus:not([readonly]) + label {
          color: #4285f4; }
      .md-form.md-outline input[type="text"].valid, .md-form.md-outline input[type="text"]:focus.valid,
      .md-form.md-outline input[type="password"].valid,
      .md-form.md-outline input[type="password"]:focus.valid,
      .md-form.md-outline input[type="email"].valid,
      .md-form.md-outline input[type="email"]:focus.valid,
      .md-form.md-outline input[type="url"].valid,
      .md-form.md-outline input[type="url"]:focus.valid,
      .md-form.md-outline input[type="time"].valid,
      .md-form.md-outline input[type="time"]:focus.valid,
      .md-form.md-outline input[type="date"].valid,
      .md-form.md-outline input[type="date"]:focus.valid,
      .md-form.md-outline input[type="datetime-local"].valid,
      .md-form.md-outline input[type="datetime-local"]:focus.valid,
      .md-form.md-outline input[type="tel"].valid,
      .md-form.md-outline input[type="tel"]:focus.valid,
      .md-form.md-outline input[type="number"].valid,
      .md-form.md-outline input[type="number"]:focus.valid,
      .md-form.md-outline input[type="search-md"].valid,
      .md-form.md-outline input[type="search-md"]:focus.valid,
      .md-form.md-outline input[type="search"].valid,
      .md-form.md-outline input[type="search"]:focus.valid,
      .md-form.md-outline textarea.md-textarea.valid,
      .md-form.md-outline textarea.md-textarea:focus.valid {
        border-color: #00c851;
        box-shadow: inset 0 0 0 1px #00c851; }
      .md-form.md-outline input[type="text"]:focus:not([readonly]).valid + label,
      .md-form.md-outline input[type="text"].valid + label:after,
      .md-form.md-outline input[type="text"]:focus.valid + label:after,
      .md-form.md-outline input[type="password"]:focus:not([readonly]).valid + label,
      .md-form.md-outline input[type="password"].valid + label:after,
      .md-form.md-outline input[type="password"]:focus.valid + label:after,
      .md-form.md-outline input[type="email"]:focus:not([readonly]).valid + label,
      .md-form.md-outline input[type="email"].valid + label:after,
      .md-form.md-outline input[type="email"]:focus.valid + label:after,
      .md-form.md-outline input[type="url"]:focus:not([readonly]).valid + label,
      .md-form.md-outline input[type="url"].valid + label:after,
      .md-form.md-outline input[type="url"]:focus.valid + label:after,
      .md-form.md-outline input[type="time"]:focus:not([readonly]).valid + label,
      .md-form.md-outline input[type="time"].valid + label:after,
      .md-form.md-outline input[type="time"]:focus.valid + label:after,
      .md-form.md-outline input[type="date"]:focus:not([readonly]).valid + label,
      .md-form.md-outline input[type="date"].valid + label:after,
      .md-form.md-outline input[type="date"]:focus.valid + label:after,
      .md-form.md-outline input[type="datetime-local"]:focus:not([readonly]).valid + label,
      .md-form.md-outline input[type="datetime-local"].valid + label:after,
      .md-form.md-outline input[type="datetime-local"]:focus.valid + label:after,
      .md-form.md-outline input[type="tel"]:focus:not([readonly]).valid + label,
      .md-form.md-outline input[type="tel"].valid + label:after,
      .md-form.md-outline input[type="tel"]:focus.valid + label:after,
      .md-form.md-outline input[type="number"]:focus:not([readonly]).valid + label,
      .md-form.md-outline input[type="number"].valid + label:after,
      .md-form.md-outline input[type="number"]:focus.valid + label:after,
      .md-form.md-outline input[type="search-md"]:focus:not([readonly]).valid + label,
      .md-form.md-outline input[type="search-md"].valid + label:after,
      .md-form.md-outline input[type="search-md"]:focus.valid + label:after,
      .md-form.md-outline input[type="search"]:focus:not([readonly]).valid + label,
      .md-form.md-outline input[type="search"].valid + label:after,
      .md-form.md-outline input[type="search"]:focus.valid + label:after,
      .md-form.md-outline textarea.md-textarea:focus:not([readonly]).valid + label,
      .md-form.md-outline textarea.md-textarea.valid + label:after,
      .md-form.md-outline textarea.md-textarea:focus.valid + label:after {
        color: #00c851;
        content: attr(data-success);
        opacity: 1; }
      .md-form.md-outline input[type="text"].invalid, .md-form.md-outline input[type="text"]:focus.invalid,
      .md-form.md-outline input[type="password"].invalid,
      .md-form.md-outline input[type="password"]:focus.invalid,
      .md-form.md-outline input[type="email"].invalid,
      .md-form.md-outline input[type="email"]:focus.invalid,
      .md-form.md-outline input[type="url"].invalid,
      .md-form.md-outline input[type="url"]:focus.invalid,
      .md-form.md-outline input[type="time"].invalid,
      .md-form.md-outline input[type="time"]:focus.invalid,
      .md-form.md-outline input[type="date"].invalid,
      .md-form.md-outline input[type="date"]:focus.invalid,
      .md-form.md-outline input[type="datetime-local"].invalid,
      .md-form.md-outline input[type="datetime-local"]:focus.invalid,
      .md-form.md-outline input[type="tel"].invalid,
      .md-form.md-outline input[type="tel"]:focus.invalid,
      .md-form.md-outline input[type="number"].invalid,
      .md-form.md-outline input[type="number"]:focus.invalid,
      .md-form.md-outline input[type="search-md"].invalid,
      .md-form.md-outline input[type="search-md"]:focus.invalid,
      .md-form.md-outline input[type="search"].invalid,
      .md-form.md-outline input[type="search"]:focus.invalid,
      .md-form.md-outline textarea.md-textarea.invalid,
      .md-form.md-outline textarea.md-textarea:focus.invalid {
        border-color: #f44336;
        box-shadow: inset 0 0 0 1px #f44336; }
      .md-form.md-outline input[type="text"]:focus:not([readonly]).invalid + label,
      .md-form.md-outline input[type="text"].invalid + label:after,
      .md-form.md-outline input[type="text"]:focus.invalid + label:after,
      .md-form.md-outline input[type="password"]:focus:not([readonly]).invalid + label,
      .md-form.md-outline input[type="password"].invalid + label:after,
      .md-form.md-outline input[type="password"]:focus.invalid + label:after,
      .md-form.md-outline input[type="email"]:focus:not([readonly]).invalid + label,
      .md-form.md-outline input[type="email"].invalid + label:after,
      .md-form.md-outline input[type="email"]:focus.invalid + label:after,
      .md-form.md-outline input[type="url"]:focus:not([readonly]).invalid + label,
      .md-form.md-outline input[type="url"].invalid + label:after,
      .md-form.md-outline input[type="url"]:focus.invalid + label:after,
      .md-form.md-outline input[type="time"]:focus:not([readonly]).invalid + label,
      .md-form.md-outline input[type="time"].invalid + label:after,
      .md-form.md-outline input[type="time"]:focus.invalid + label:after,
      .md-form.md-outline input[type="date"]:focus:not([readonly]).invalid + label,
      .md-form.md-outline input[type="date"].invalid + label:after,
      .md-form.md-outline input[type="date"]:focus.invalid + label:after,
      .md-form.md-outline input[type="datetime-local"]:focus:not([readonly]).invalid + label,
      .md-form.md-outline input[type="datetime-local"].invalid + label:after,
      .md-form.md-outline input[type="datetime-local"]:focus.invalid + label:after,
      .md-form.md-outline input[type="tel"]:focus:not([readonly]).invalid + label,
      .md-form.md-outline input[type="tel"].invalid + label:after,
      .md-form.md-outline input[type="tel"]:focus.invalid + label:after,
      .md-form.md-outline input[type="number"]:focus:not([readonly]).invalid + label,
      .md-form.md-outline input[type="number"].invalid + label:after,
      .md-form.md-outline input[type="number"]:focus.invalid + label:after,
      .md-form.md-outline input[type="search-md"]:focus:not([readonly]).invalid + label,
      .md-form.md-outline input[type="search-md"].invalid + label:after,
      .md-form.md-outline input[type="search-md"]:focus.invalid + label:after,
      .md-form.md-outline input[type="search"]:focus:not([readonly]).invalid + label,
      .md-form.md-outline input[type="search"].invalid + label:after,
      .md-form.md-outline input[type="search"]:focus.invalid + label:after,
      .md-form.md-outline textarea.md-textarea:focus:not([readonly]).invalid + label,
      .md-form.md-outline textarea.md-textarea.invalid + label:after,
      .md-form.md-outline textarea.md-textarea:focus.invalid + label:after {
        color: #f44336;
        content: attr(data-error);
        opacity: 1; }
      .md-form.md-outline input[type="text"].form-control.valid + label:after,
      .md-form.md-outline input[type="text"].form-control:focus.valid + label:after,
      .md-form.md-outline input[type="password"].form-control.valid + label:after,
      .md-form.md-outline input[type="password"].form-control:focus.valid + label:after,
      .md-form.md-outline input[type="email"].form-control.valid + label:after,
      .md-form.md-outline input[type="email"].form-control:focus.valid + label:after,
      .md-form.md-outline input[type="url"].form-control.valid + label:after,
      .md-form.md-outline input[type="url"].form-control:focus.valid + label:after,
      .md-form.md-outline input[type="time"].form-control.valid + label:after,
      .md-form.md-outline input[type="time"].form-control:focus.valid + label:after,
      .md-form.md-outline input[type="date"].form-control.valid + label:after,
      .md-form.md-outline input[type="date"].form-control:focus.valid + label:after,
      .md-form.md-outline input[type="datetime-local"].form-control.valid + label:after,
      .md-form.md-outline input[type="datetime-local"].form-control:focus.valid + label:after,
      .md-form.md-outline input[type="tel"].form-control.valid + label:after,
      .md-form.md-outline input[type="tel"].form-control:focus.valid + label:after,
      .md-form.md-outline input[type="number"].form-control.valid + label:after,
      .md-form.md-outline input[type="number"].form-control:focus.valid + label:after,
      .md-form.md-outline input[type="search-md"].form-control.valid + label:after,
      .md-form.md-outline input[type="search-md"].form-control:focus.valid + label:after,
      .md-form.md-outline input[type="search"].form-control.valid + label:after,
      .md-form.md-outline input[type="search"].form-control:focus.valid + label:after,
      .md-form.md-outline textarea.md-textarea.form-control.valid + label:after,
      .md-form.md-outline textarea.md-textarea.form-control:focus.valid + label:after {
        position: absolute;
        top: 4rem;
        left: 0; }
      .md-form.md-outline input[type="text"].form-control.invalid + label:after,
      .md-form.md-outline input[type="text"].form-control:focus.invalid + label:after,
      .md-form.md-outline input[type="password"].form-control.invalid + label:after,
      .md-form.md-outline input[type="password"].form-control:focus.invalid + label:after,
      .md-form.md-outline input[type="email"].form-control.invalid + label:after,
      .md-form.md-outline input[type="email"].form-control:focus.invalid + label:after,
      .md-form.md-outline input[type="url"].form-control.invalid + label:after,
      .md-form.md-outline input[type="url"].form-control:focus.invalid + label:after,
      .md-form.md-outline input[type="time"].form-control.invalid + label:after,
      .md-form.md-outline input[type="time"].form-control:focus.invalid + label:after,
      .md-form.md-outline input[type="date"].form-control.invalid + label:after,
      .md-form.md-outline input[type="date"].form-control:focus.invalid + label:after,
      .md-form.md-outline input[type="datetime-local"].form-control.invalid + label:after,
      .md-form.md-outline input[type="datetime-local"].form-control:focus.invalid + label:after,
      .md-form.md-outline input[type="tel"].form-control.invalid + label:after,
      .md-form.md-outline input[type="tel"].form-control:focus.invalid + label:after,
      .md-form.md-outline input[type="number"].form-control.invalid + label:after,
      .md-form.md-outline input[type="number"].form-control:focus.invalid + label:after,
      .md-form.md-outline input[type="search-md"].form-control.invalid + label:after,
      .md-form.md-outline input[type="search-md"].form-control:focus.invalid + label:after,
      .md-form.md-outline input[type="search"].form-control.invalid + label:after,
      .md-form.md-outline input[type="search"].form-control:focus.invalid + label:after,
      .md-form.md-outline textarea.md-textarea.form-control.invalid + label:after,
      .md-form.md-outline textarea.md-textarea.form-control:focus.invalid + label:after {
        position: absolute;
        top: 4rem;
        left: 0; }
    .md-form.md-outline > input[type]:-webkit-autofill:not(.browser-default):not([type="search"]) + label,
    .md-form.md-outline > input[type="time"]:not(.browser-default) + label {
      left: 8px;
      padding-right: 5px;
      padding-left: 5px;
      font-size: 1rem;
      font-weight: 500;
      background: #fff;
      transform: translateY(-9px) scale(0.8);
      transform-origin: 0 0; }
    .md-form.md-outline > input[type]:-webkit-autofill:not(.browser-default):not([type="search"]) + label.active,
    .md-form.md-outline > input[type="time"]:not(.browser-default) + label.active {
      transform: translateY(-9px) scale(0.8);
      transform-origin: 0 0; }

@-webkit-keyframes autofill {
  to {
    color: #495057;
    background: transparent; } }

@keyframes autofill {
  to {
    color: #495057;
    background: transparent; } }
    .md-form.md-outline input:-webkit-autofill {
      -webkit-animation-name: autofill;
      animation-name: autofill;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both; }
    .md-form.md-outline .form-control {
      padding: .375rem .75rem; }
    .md-form.md-outline label {
      position: absolute;
      top: 0;
      left: 0;
      padding-left: 10px;
      font-size: 1rem;
      color: #757575;
      cursor: text;
      transition: transform .2s ease-out, color .2s ease-out;
      transform: translateY(9px);
      transform-origin: 0% 100%; }
      .md-form.md-outline label.active {
        left: 8px;
        padding-right: 5px;
        padding-left: 5px;
        font-weight: 500;
        background: #fff;
        transform: translateY(-13px) scale(0.8); }
    .md-form.md-outline.form-lg .form-control.form-control-lg {
      padding: .5rem .725rem; }
    .md-form.md-outline.form-lg label {
      font-size: 1.25rem;
      transform: translateY(10px); }
      .md-form.md-outline.form-lg label.active {
        font-size: 1.1rem;
        transform: translateY(-14px) scale(0.8); }
    .md-form.md-outline.form-lg .prefix {
      top: .65rem;
      font-size: 25px; }
      .md-form.md-outline.form-lg .prefix ~ input,
      .md-form.md-outline.form-lg .prefix ~ textarea {
        width: calc(100% - 2.2rem);
        margin-left: 2.2rem; }
      .md-form.md-outline.form-lg .prefix ~ label {
        margin-left: 2.2rem; }
      .md-form.md-outline.form-lg .prefix ~ .form-text {
        margin-left: 2.3rem; }
    .md-form.md-outline.form-sm .form-control.form-control-sm {
      padding: .25rem .625rem; }
    .md-form.md-outline.form-sm label {
      font-size: .8rem;
      transform: translateY(8px); }
      .md-form.md-outline.form-sm label.active {
        font-size: .85rem;
        transform: translateY(-12px) scale(0.8); }
    .md-form.md-outline.form-sm .prefix {
      top: .5rem;
      font-size: 15px; }
      .md-form.md-outline.form-sm .prefix ~ input,
      .md-form.md-outline.form-sm .prefix ~ textarea {
        width: calc(100% - 1.6rem);
        margin-left: 1.6rem; }
      .md-form.md-outline.form-sm .prefix ~ label {
        margin-left: 1.6rem; }
      .md-form.md-outline.form-sm .prefix ~ .form-text {
        margin-left: 1.7rem; }
    .md-form.md-outline .prefix {
      position: absolute;
      top: .6rem;
      font-size: 20px;
      transition: color .2s; }
      .md-form.md-outline .prefix:focus {
        color: #4285f4; }
      .md-form.md-outline .prefix ~ input,
      .md-form.md-outline .prefix ~ textarea {
        width: calc(100% - 2rem);
        margin-left: 2rem; }
      .md-form.md-outline .prefix ~ label {
        margin-left: 2rem; }
      .md-form.md-outline .prefix ~ .form-text {
        margin-left: 2.1rem; }
    .md-form.md-outline .character-counter {
      margin-top: -.5rem; }
  .md-form.md-bg input[type="text"],
  .md-form.md-bg input[type="password"],
  .md-form.md-bg input[type="email"],
  .md-form.md-bg input[type="url"],
  .md-form.md-bg input[type="time"],
  .md-form.md-bg input[type="date"],
  .md-form.md-bg input[type="datetime-local"],
  .md-form.md-bg input[type="tel"],
  .md-form.md-bg input[type="number"],
  .md-form.md-bg input[type="search-md"],
  .md-form.md-bg input[type="search"],
  .md-form.md-bg textarea.md-textarea {
    box-sizing: border-box;
    padding: 10px 5px;
    background: #f5f5f5 no-repeat;
    background-image: linear-gradient(to bottom, #4285f4, #4285f4), linear-gradient(to bottom, #ced4da, #ced4da);
    background-position: 50% 100%, 50% 100%;
    background-size: 0 2px, 100% 1px;
    border: 0;
    border-top-left-radius: .3rem;
    border-top-right-radius: .3rem;
    transition: background-size 0.3s cubic-bezier(0.64, 0.09, 0.08, 1); }
    .md-form.md-bg input[type="text"]:focus:not([readonly]),
    .md-form.md-bg input[type="password"]:focus:not([readonly]),
    .md-form.md-bg input[type="email"]:focus:not([readonly]),
    .md-form.md-bg input[type="url"]:focus:not([readonly]),
    .md-form.md-bg input[type="time"]:focus:not([readonly]),
    .md-form.md-bg input[type="date"]:focus:not([readonly]),
    .md-form.md-bg input[type="datetime-local"]:focus:not([readonly]),
    .md-form.md-bg input[type="tel"]:focus:not([readonly]),
    .md-form.md-bg input[type="number"]:focus:not([readonly]),
    .md-form.md-bg input[type="search-md"]:focus:not([readonly]),
    .md-form.md-bg input[type="search"]:focus:not([readonly]),
    .md-form.md-bg textarea.md-textarea:focus:not([readonly]) {
      border-bottom: none;
      box-shadow: none; }
    .md-form.md-bg input[type="text"]:focus,
    .md-form.md-bg input[type="password"]:focus,
    .md-form.md-bg input[type="email"]:focus,
    .md-form.md-bg input[type="url"]:focus,
    .md-form.md-bg input[type="time"]:focus,
    .md-form.md-bg input[type="date"]:focus,
    .md-form.md-bg input[type="datetime-local"]:focus,
    .md-form.md-bg input[type="tel"]:focus,
    .md-form.md-bg input[type="number"]:focus,
    .md-form.md-bg input[type="search-md"]:focus,
    .md-form.md-bg input[type="search"]:focus,
    .md-form.md-bg textarea.md-textarea:focus {
      background-color: #dcdcdc;
      background-size: 100% 2px, 100% 1px;
      outline: none; }
  .md-form.md-bg > input[type="date"]:not(.browser-default) + label {
    transform: translateY(-12px) scale(0.8);
    transform-origin: 0 0; }
  .md-form.md-bg > input[type]:-webkit-autofill:not(.browser-default):not([type="search"]) + label,
  .md-form.md-bg > input[type="time"]:not(.browser-default) + label {
    font-size: .8rem;
    transform: translateY(-12px);
    transform-origin: 0 0; }
  .md-form.md-bg .form-control {
    padding: 1.1rem .7rem .4rem !important; }
  .md-form.md-bg label {
    top: 0;
    padding-left: .7rem;
    font-size: 1rem;
    transition: transform .2s ease-out, color .2s ease-out;
    transform: translateY(13px);
    transform-origin: 0% 100%; }
    .md-form.md-bg label.active {
      padding-left: .75rem;
      font-weight: 500;
      transform: translateY(-3px) scale(0.8); }
  .md-form.md-bg.form-lg label {
    transform: translateY(16px); }
    .md-form.md-bg.form-lg label.active {
      transform: translateY(-4px) scale(0.8); }
  .md-form.md-bg.form-sm label {
    transform: translateY(11px); }
    .md-form.md-bg.form-sm label.active {
      transform: translateY(-2px) scale(0.8); }

.md-form .form-control.is-invalid,
.was-validated .md-form .form-control:invalid {
  padding-right: 0; }

.md-form .form-control.is-valid,
.was-validated .md-form .form-control:valid {
  padding-right: 0; }

.needs-validation .md-form label {
  left: .3rem; }

.custom-file-input:lang(es) ~ .custom-file-label::after {
  content: "Elegir"; }

.custom-file-input:lang(pl-pl) ~ .custom-file-label::after {
  content: "Wybierz"; }

.custom-file-input:lang(fr) ~ .custom-file-label::after {
  content: "Choisir"; }

.custom-file-input:lang(in) ~ .custom-file-label::after {
  content: "Pilih"; }

.custom-file-input:lang(zh) ~ .custom-file-label::after {
  content: "選擇"; }

.custom-file-input:lang(de) ~ .custom-file-label::after {
  content: "Wählen"; }

.custom-file-input:lang(ru) ~ .custom-file-label::after {
  content: "выбирать"; }

.edge-header {
  display: block;
  height: 278px;
  background-color: #ccc; }

.free-bird {
  margin-top: -100px; }

.juicy-peach-gradient {
  background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%); }

.young-passion-gradient {
  background-image: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%); }

.lady-lips-gradient {
  background-image: linear-gradient(to top, #ff9a9e 0%, #fecfef 99%, #fecfef 100%); }

.sunny-morning-gradient {
  background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%); }

.rainy-ashville-gradient {
  background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%); }

.frozen-dreams-gradient {
  background-image: linear-gradient(to top, #fdcbf1 0%, #fdcbf1 1%, #e6dee9 100%); }

.warm-flame-gradient {
  background-image: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%); }

.night-fade-gradient {
  background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%); }

.spring-warmth-gradient {
  background-image: linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%); }

.winter-neva-gradient {
  background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%); }

.dusty-grass-gradient {
  background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%); }

.tempting-azure-gradient {
  background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%); }

.heavy-rain-gradient {
  background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%); }

.amy-crisp-gradient {
  background-image: linear-gradient(120deg, #a6c0fe 0%, #f68084 100%); }

.mean-fruit-gradient {
  background-image: linear-gradient(120deg, #fccb90 0%, #d57eeb 100%); }

.deep-blue-gradient {
  background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%); }

.ripe-malinka-gradient {
  background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%); }

.cloudy-knoxville-gradient {
  background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%); }

.morpheus-den-gradient {
  background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%); }

.rare-wind-gradient {
  background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%); }

.near-moon-gradient {
  background-image: linear-gradient(to top, #5ee7df 0%, #b490ca 100%); }

.schedule-list .hr-bold {
  border-top: 2px solid #212529; }

.schedule-list .font-smaller {
  font-size: .8rem; }

.note {
  padding: 10px;
  border-left: 6px solid;
  border-radius: 5px; }
  .note strong {
    font-weight: 600; }
  .note p {
    font-weight: 500; }

.note-primary {
  background-color: #dfeefd;
  border-color: #176ac4; }

.note-secondary {
  background-color: #e2e3e5;
  border-color: #58595a; }

.note-success {
  background-color: #e2f0e5;
  border-color: #49a75f; }

.note-danger {
  background-color: #fae7e8;
  border-color: #e45460; }

.note-warning {
  background-color: #faf4e0;
  border-color: #c2a442; }

.note-info {
  background-color: #e4f2f5;
  border-color: #2492a5; }

.note-light {
  background-color: #fefefe;
  border-color: #0f0f0f; }

footer.page-footer {
  bottom: 0;
  color: #fff; }
  footer.page-footer .container-fluid {
    width: auto; }
  footer.page-footer .footer-copyright {
    overflow: hidden;
    color: rgba(255, 255, 255, 0.6);
    background-color: rgba(0, 0, 0, 0.2); }
  footer.page-footer a {
    color: #fff; }

.media .media-left {
  padding: 0 10px 10px 0; }
  .media .media-left img {
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); }

.list-group .list-group-item:first-child {
  border-top-left-radius: 0.125rem;
  border-top-right-radius: 0.125rem; }

.list-group .list-group-item:last-child {
  border-bottom-right-radius: 0.125rem;
  border-bottom-left-radius: 0.125rem; }

.list-group a,
.list-group button {
  transition: 0.5s; }
  .list-group a:hover,
  .list-group button:hover {
    transition: 0.5s; }

table th {
  font-size: 0.9rem;
  font-weight: 400; }

table td {
  font-size: 0.9rem;
  font-weight: 300; }

table.table thead th {
  border-top: none; }

table.table th,
table.table td {
  padding-top: 1.1rem;
  padding-bottom: 1rem; }

table.table a {
  margin: 0;
  color: #212529; }

table.table .label-table {
  height: 0.94rem;
  padding: 0;
  margin: 0;
  line-height: 0.94rem; }

table.table.btn-table td {
  vertical-align: middle; }

table.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.075);
  transition: 0.5s; }

table .th-lg {
  min-width: 9rem; }

table .th-sm {
  min-width: 6rem; }

table.table-sm th,
table.table-sm td {
  padding-top: 0.6rem;
  padding-bottom: 0.6rem; }

.table-scroll-vertical {
  max-height: 300px;
  overflow-y: auto; }

.table-fixed {
  table-layout: fixed; }

.table-responsive > .table-bordered,
.table-responsive-sm > .table-bordered,
.table-responsive-md > .table-bordered,
.table-responsive-lg > .table-bordered,
.table-responsive-xl > .table-bordered {
  border-top: 1px solid #dee2e6; }

/*
.navbar {
  &.fixed-top,
  &.sticky-top {
    .navbar-collapse {
      @media (min-width: 400px) and (max-width: 767px),
      (min-width: 800px) and (max-width: 850px) {
        max-height: 340px;
        overflow-x: hidden;
        overflow-y: auto;
      }
    }
  }
}
*/
ul.stepper {
  padding: 0 1.5rem;
  padding: 1.5rem;
  margin: 1em -1.5rem;
  overflow-x: hidden;
  overflow-y: auto;
  counter-reset: section; }
  ul.stepper li a {
    padding: 1.5rem;
    text-align: center; }
    ul.stepper li a .circle {
      display: inline-block;
      width: 1.75rem;
      height: 1.75rem;
      margin-right: 0.5rem;
      line-height: 1.7rem;
      color: #fff;
      text-align: center;
      background: rgba(0, 0, 0, 0.38);
      border-radius: 50%; }
    ul.stepper li a .label {
      display: inline-block;
      color: rgba(0, 0, 0, 0.38); }
  ul.stepper li.active a .label, ul.stepper li.completed a .label {
    font-weight: 600;
    color: rgba(0, 0, 0, 0.87); }

.stepper-horizontal {
  position: relative;
  display: flex;
  justify-content: space-between; }
  .stepper-horizontal li {
    position: relative;
    display: flex;
    flex: 1;
    align-items: center;
    transition: 0.5s; }
    .stepper-horizontal li a .label {
      margin-top: 0.63rem; }
    .stepper-horizontal li:not(:last-child):after {
      position: relative;
      flex: 1;
      height: 1px;
      margin: 0.5rem 0 0 0;
      content: "";
      background-color: rgba(0, 0, 0, 0.1); }
    .stepper-horizontal li:not(:first-child):before {
      position: relative;
      flex: 1;
      height: 1px;
      margin: 0.5rem 0 0 0;
      content: "";
      background-color: rgba(0, 0, 0, 0.1); }
    .stepper-horizontal li:hover {
      background-color: rgba(0, 0, 0, 0.06); }
  @media (max-width: 47.9375rem) {
    .stepper-horizontal {
      flex-direction: column; }
      .stepper-horizontal li {
        flex-direction: column;
        align-items: flex-start; }
        .stepper-horizontal li a .label {
          flex-flow: column nowrap;
          order: 2;
          margin-top: 0.2rem; }
        .stepper-horizontal li:not(:last-child):after {
          position: absolute;
          top: 3.75rem;
          left: 2.19rem;
          width: 1px;
          height: calc(100% - 40px);
          content: ""; } }
  .stepper-horizontal > li:not(:last-of-type) {
    margin-bottom: 0 !important; }

.stepper-vertical {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: space-between; }
  .stepper-vertical li {
    position: relative;
    display: flex;
    flex: 1;
    flex-direction: column;
    align-items: flex-start; }
    .stepper-vertical li a {
      position: relative;
      display: flex;
      align-self: flex-start; }
      .stepper-vertical li a .circle {
        order: 1; }
      .stepper-vertical li a .label {
        flex-flow: column nowrap;
        order: 2;
        margin-top: 0.2rem; }
    .stepper-vertical li.completed a .label {
      font-weight: 500; }
    .stepper-vertical li .step-content {
      display: block;
      padding: 0.94rem;
      margin-top: 0;
      margin-left: 3.13rem; }
      .stepper-vertical li .step-content p {
        font-size: 0.88rem; }
    .stepper-vertical li:not(:last-child):after {
      position: absolute;
      top: 3.44rem;
      left: 2.19rem;
      width: 1px;
      height: calc(100% - 40px);
      content: "";
      background-color: rgba(0, 0, 0, 0.1); }

.fast.spinner-border {
  -webkit-animation: spinner-border 0.4s linear infinite;
          animation: spinner-border 0.4s linear infinite; }

.fast.spinner-grow {
  -webkit-animation: spinner-grow 0.4s linear infinite;
          animation: spinner-grow 0.4s linear infinite; }

.treeview.w-20 {
  width: 20rem; }

.treeview .rotate {
  margin-top: .2rem;
  font-size: .8rem;
  vertical-align: text-top;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  transition: all .1s linear; }
  .treeview .rotate.down {
    transform: rotate(90deg); }

.treeview .nested {
  display: none; }

.treeview .active {
  display: block; }

.treeview ul {
  list-style-type: none; }

.treeview .ic-w {
  width: 1.3rem; }

.treeview-animated.w-20 {
  width: 20rem; }

.treeview-animated ul {
  position: relative;
  padding-left: 1em;
  list-style: none; }

.treeview-animated .treeview-animated-list li {
  padding: .2em 0 0 .2em; }

.treeview-animated .treeview-animated-list .treeview-animated-items .nested::before {
  position: absolute;
  left: 5px;
  display: block;
  width: 5px;
  height: 100%;
  content: "";
  background-color: #808080; }

.treeview-animated .treeview-animated-list .treeview-animated-items .closed {
  display: block;
  padding: .2em .2em .2em .4em;
  margin-right: 0;
  border-top-left-radius: .3em;
  border-bottom-left-radius: .3em; }
  .treeview-animated .treeview-animated-list .treeview-animated-items .closed:hover {
    background-color: #8cb9ff; }
  .treeview-animated .treeview-animated-list .treeview-animated-items .closed .fa-angle-right {
    font-size: .8rem;
    transition: all .1s linear; }
    .treeview-animated .treeview-animated-list .treeview-animated-items .closed .fa-angle-right.down {
      position: relative;
      color: #f8f9fa;
      transform: rotate(90deg); }

.treeview-animated .treeview-animated-list .treeview-animated-items .open {
  background-color: #32a0ff;
  transition: all .1s linear; }
  .treeview-animated .treeview-animated-list .treeview-animated-items .open:hover {
    color: #f8f9fa;
    background-color: #32a0ff; }
  .treeview-animated .treeview-animated-list .treeview-animated-items .open span {
    color: #f8f9fa; }

.treeview-animated .treeview-animated-list .treeview-animated-element {
  padding: .2em .2em .2em .6em;
  cursor: pointer;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
  transition: all .1s linear; }
  .treeview-animated .treeview-animated-list .treeview-animated-element:hover {
    background-color: #8cb9ff; }
  .treeview-animated .treeview-animated-list .treeview-animated-element.opened {
    color: #f8f9fa;
    background-color: #32a0ff; }
    .treeview-animated .treeview-animated-list .treeview-animated-element.opened:hover {
      color: #f8f9fa;
      background-color: #32a0ff; }

.treeview-colorful {
  font-size: 16px;
  font-weight: 400;
  background: rgba(224, 127, 178, 0.2); }
  .treeview-colorful.w-20 {
    width: 20rem; }
  .treeview-colorful hr {
    border-color: #a2127a; }
  .treeview-colorful h6 {
    font-size: 1.4em;
    font-weight: 500;
    color: #a2127a; }
  .treeview-colorful ul {
    position: relative;
    padding-left: 0;
    list-style: none; }
  .treeview-colorful .treeview-colorful-list ul {
    padding-left: 1em;
    margin-top: .1em;
    background: rgba(224, 127, 178, 0.2); }
  .treeview-colorful .treeview-colorful-element {
    padding: .2em .2em .2em 1em;
    cursor: pointer;
    border: 2px solid transparent;
    border-right: 0 solid transparent;
    transition: all .1s linear; }
    .treeview-colorful .treeview-colorful-element:hover {
      background-color: #e07fb2; }
    .treeview-colorful .treeview-colorful-element.opened {
      color: #ffac47;
      background-color: #a2127a;
      border: 2px solid #ffac47;
      border-right: 0 solid transparent; }
      .treeview-colorful .treeview-colorful-element.opened:hover {
        color: #ffac47;
        background-color: #a2127a; }
  .treeview-colorful .treeview-colorful-items-header {
    display: block;
    padding: .4em;
    margin-right: 0;
    border-bottom: 2px solid transparent;
    transition: all .1s linear; }
    .treeview-colorful .treeview-colorful-items-header:hover {
      background-color: #e07fb2; }
    .treeview-colorful .treeview-colorful-items-header.open {
      background-color: #a2127a;
      border-bottom: 2px solid #ffac47;
      transition: all .1s linear; }
      .treeview-colorful .treeview-colorful-items-header.open span {
        color: #ffac47; }
      .treeview-colorful .treeview-colorful-items-header.open:hover {
        color: #ffac47;
        background-color: #a2127a; }
      .treeview-colorful .treeview-colorful-items-header.open div:hover {
        background-color: #a2127a; }
    .treeview-colorful .treeview-colorful-items-header .fa-angle-right {
      font-size: .8rem;
      transition: all .2s linear; }
    .treeview-colorful .treeview-colorful-items-header .fas {
      position: relative;
      color: #ffac47;
      transition: all .2s linear;
      transform: rotate(90deg); }
    .treeview-colorful .treeview-colorful-items-header .fa-minus-circle {
      position: relative;
      color: #ffac47;
      transition: all .2s linear;
      transform: rotate(180deg); }
      
      .sidebar-fixed {
  height: 100vh;
  width: 270px;
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  z-index: 1050;
  background-color: #fff;
  padding: 1.5rem;
  padding-top: 0; }
  .sidebar-fixed .list-group .active {
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    -webkit-border-radius: 5px;
    border-radius: 5px; }
  .sidebar-fixed .logo-wrapper {
    padding: 2.5rem; }
    .sidebar-fixed .logo-wrapper img {
      max-height: 50px; }

@media (min-width: 1200px) {
  .navbar,
  .page-footer,
  main {
    padding-left: 270px; } }

@media (max-width: 1199.98px) {
  .sidebar-fixed {
    display: none; } }
</style>