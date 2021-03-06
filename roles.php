<html lang="en">

<head>
  <meta name="generator" content="HTML Tidy for Mac OS X (vers 31 October 2006 - Apple Inc. build 15.18.1), see www.w3.org">

  <title></title>
		<?php include("includes/common-head-tags.php"); ?>

  <link rel="stylesheet" type="text/css" href="css/table.css" />
</head>

<body>

  <p>
    Extra information is available at <a href="https://dequeuniversity.com/assets/html/jquery-summit/html5/slides/landmarks.html">dequeuniversity.com's ARIA landmark page</a> and
    <a href="http://whatsock.com/training/matrices/">Whatsock's ARIA Role Matrices page</a>.
    <a href="index.html">Go back to main page</a>
  </p>

  <table class="fixed-headers" id="aria-table">
    <caption>
      <abbr title="Accessible Rich Internet Applications">ARIA</abbr> Roles, States and Properties
    </caption>

    <thead>
      <tr>
        <th scope="col">Role</th>

        <th scole="col">HTML equivalent</th>

        <th scope="col">Description</th>

        <th scope="col">Required Properties</th>

        <th scope="col">Supported Properties</th>

        <th scope="col">Kind of content -
          <span class="new-feature">(new)</span>
        </th>

        <th scope="col">Descendant restrictions -
          <span class="new-feature">(new)</span>
        </th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td tabindex="-1" id="index-aria-global">any</td>
        <td></td>
        <td>
          <abbr title="Accessible Rich Internet Applications">ARIA</abbr>
          <dfn data-dfn-type="dfn" id="dfn-global-states-and-properties">global states and properties
          </dfn> can be used on any HTML element.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-atomic">
                <code>
            aria-atomic</code>
              </a>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-busy">aria-busy
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-controls">aria-controls</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-current">aria-current
            (state)</a></code> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-describedby">aria-describedby</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-details">aria-details</a></code> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-disabled">aria-disabled
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-dropeffect">aria-dropeffect</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-errormessage">
            aria-errormessage</a></code> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-flowto">aria-flowto</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-grabbed">aria-grabbed
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-haspopup">aria-haspopup</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-hidden">aria-hidden
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-invalid">aria-invalid
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-keyshortcuts">
            aria-keyshortcuts</a></code> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-label">aria-label</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-labelledby">aria-labelledby</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-live">aria-live</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-owns">aria-owns</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-relevant">aria-relevant</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-roledescription">
            aria-roledescription</a></code> -
              <span class="new-feature">(new)</span>
            </li>
          </ul>
        </td>

        <td>n/a</td>

        <td>n/a</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-alert">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#alert">alert</a></code>
        </td>
        <td></td>

        <td>A type of
          <code>live region</code> with important, and usually time-sensitive, information. See related
          <code>alerTDialog</code> and
          <code>status</code>.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-alerTDialog">
          <code><a href="https://www.w3.org/TR/wai-aria-1.1/#alertdialog">
        alertdialog</a></code>
        </td>
        <td></td>

        <td>A type of dialog that contains an alert message, where initial focus goes to an element within the dialog. See related
          <code>alert</code> and
          <code>dialog</code>.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-modal">
                <code>aria-modal</code>
              </a>
              -
              <span class="new-feature">(new)</span>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-application">
          <code><a href="https://www.w3.org/TR/wai-aria-1.1/#application">
        application</a></code>
        </td>
        <td></td>

        <td><p>A structure containing one or more focusable elements requiring user input, such as keyboard or gesture events, that
          do not follow a standard interaction pattern supported by a widget role. -
          <span class="changed-feature">changed)</span></p>

          <p>This role should be used sparingly (e.g. when the browser/keyboard user interface is being overridden to enhance the user experience for keyboard users.
            An example of this is <a href="https://shwr.me/">The Shower Slideshow</a> (<a href="https://tink.uk/using-the-aria-application-role/">a write-up that explains how this is used</a> is available at tink.uk.
          </p>
        </td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
          aria-activedescendant</a><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded"></a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-article">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#article">article</a></code>
        </td>
        <td><code>&lt;article&gt;</code></td>

        <td>A section of a page that consists of a composition that forms an independent part of a document, page, or site.

            <em>This role is not a landmark.</em>
        </td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>No
          <a href="https://w3c.github.io/html/grouping-content.html#elementdef-main">
            main</a> element descendants.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-banner">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#banner">banner</a></code>
        </td>
        <td><code>&lt;header&gt;</code></td>

        <td>A region that contains mostly site-oriented content, rather than page-specific content.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>Document region</td>

        <td>no
          <a href="https://w3c.github.io/html/grouping-content.html#elementdef-main">
            main</a> element descendants, or
          <a href="https://w3c.github.io/html/sections.html#elementdef-header">
            header</a>,
          <a href="https://w3c.github.io/html/sections.html#elementdef-footer">
            footer</a> elements that are not descendants of
          <a href="https://w3c.github.io/html/dom.html#sectioning-content-2">sectioning content
          </a> which is a descendant of the
          <a href="https://w3c.github.io/html/sections.html#elementdef-header">
            header</a>.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-button">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#button">button</a></code>
        </td>
        <td></td>

        <td>An input that allows for user-triggered actions when clicked or pressed. See related
          <code>link</code>.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-pressed">aria-pressed
            (state)</a></code>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#interactive-content">Interactive content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
          <a href="https://w3c.github.io/html/dom.html#phrasing-content-2"></a>, but there must be no
          <a href="https://w3c.github.io/html/dom.html#interactive-content-2">
            interactive content</a> descendant.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-checkbox">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#checkbox">checkbox</a></code>
        </td>
        <td></td>

        <td>A checkable input that has three possible values: true, false, or mixed.</td>

        <td>
          <ul>
            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-checked">
                <code>
            aria-checked (state)</code>
              </a>
            </li>
          </ul>
        </td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-readonly">aria-readonly</a></code>
              <span class="new-feature">(new)</span>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#interactive-content">Interactive content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
          <a href="https://w3c.github.io/html/dom.html#phrasing-content-2"></a>, but there must be no
          <a href="https://w3c.github.io/html/dom.html#interactive-content-2">
            interactive content</a> descendant.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-cell">
          <a href="https://www.w3.org/TR/wai-aria-1.1/#cell">
            <code>cell</code>
          </a>
          -
          <span class="new-feature">(new)</span>
        </td>

        <td>A cell in a tabular container.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-colspan">
                <code>
            aria-colspan</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-colindex">
                <code>
            aria-colindex</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-rowindex">
                <code>
            aria-rowindex</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-rowspan">
                <code>
            aria-rowspan</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-columnheader">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#columnheader">columnheader</a></code>
        </td>
        <td></td>

        <td>A cell containing header information for a column.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-sort">aria-sort</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-readonly">aria-readonly</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-required">aria-required</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-selected">aria-selected
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-colspan">
                <code>
            aria-colspan</code>
              </a>
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-colindex">
                <code>
            aria-colindex</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-rowindex">
                <code>
            aria-rowindex</code>
              </a>
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-rowspan">
                <code>
            aria-rowspan</code>
              </a>
              <span class="new-feature">(new)</span>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-combobox">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#combobox">combobox</a></code>
        </td>
        <td></td>

        <td>A presentation of a select; usually similar to a textbox where users can type ahead to select an option, or type
          to enter arbitrary text as a new item in the list. See related
          <code>listbox</code>.</td>

        <td>
          <ul>
            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-controls">
                <code>
            aria-controls</code>
              </a> -
              <span class="changed-feature">(changed)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">
                <code>
            aria-expanded (state)</code>
              </a>
            </li>
          </ul>
        </td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-autocomplete">
            aria-autocomplete</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-required">aria-required</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
            aria-activedescendant</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-orientation">
                <code>
            aria-orientation</code>
              </a> -
              <span class="changed-feature">(changed)</span>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#interactive-content">Interactive content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-complementary">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#complementary">complementary</a></code>
        </td>
        <td><code>&lt;aside&gt;</code></td>

        <td>A supporting section of the document, designed to be complementary to the main content at a similar level in the
          DOM hierarchy, but remains meaningful when separated from the main content.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>, but with no
          <a href="https://w3c.github.io/html/grouping-content.html#elementdef-main">
            main</a> element descendants.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-contentinfo">
          <code><a href="https://www.w3.org/TR/wai-aria-1.1/#contentinfo">
        contentinfo</a></code>
        </td>
        <td><code>&lt;footer&gt;</code></td>

        <td>A large perceivable region that contains information about the parent document.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>, but with no
          <a href="https://w3c.github.io/html/grouping-content.html#elementdef-main">
            main</a> element descendants, or
          <a href="https://w3c.github.io/html/sections.html#elementdef-header">
            header</a>,
          <a href="https://w3c.github.io/html/sections.html#elementdef-footer">
            footer</a> elements that are not descendants of
          <a href="https://w3c.github.io/html/dom.html#sectioning-content-2">sectioning content
          </a> which is a descendant of the
          <a href="https://w3c.github.io/html/sections.html#elementdef-header">
            header</a>.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-definition">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#definition">definition</a></code>
        </td>
        <td></td>

        <td>A definition of a term or concept.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#phrasing-content">Phrasing content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#phrasing-content">Phrasing content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-dialog">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#dialog">dialog</a></code>
        </td>
        <td></td>

        <td>A dialog is an application window that is designed to interrupt the current processing of an application in order
          to prompt the user to enter information or require a response. See related
          <code>alerTDialog</code>.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-modal">
                <code>aria-modal</code>
              </a>
              -
              <span class="new-feature">(new)</span>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
          <a href="https://w3c.github.io/html/dom.html#interactive-content"></a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-directory">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#directory">directory</a></code>
        </td>
        <td></td>

        <td>A list of references to members of a group, such as a static table of contents.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-document">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#document">document</a></code>
        </td>
        <td></td>

        <td>A region containing related information that is declared as document content, as opposed to a web application.
        </td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-feed">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#feed">feed</a></code> -
          <span class="new-feature">(new)</span>
        </td>

        <td>A scrollable list of articles where scrolling may cause articles to be added to or removed from either end of the
          list.
        </td>

        <td>none</td>

        <td>
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
        (state)</a></code>
        </td>
        <td></td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-figure">
          <a href="https://www.w3.org/TR/wai-aria-1.1/#figure">
            <code>figure</code>
          </a>
          -
          <span class="new-feature">(new)</span>
        </td>

        <td>A perceivable section of content that typically contains a graphical document, images, code snippets, or example
          text.</td>

        <td>none</td>

        <td>
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
        (state)</a></code>
        </td>
        <td></td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-form">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#form">form</a></code>
        </td>
        <td>form</td>

        <td>A landmark region that contains a collection of items and objects that, as a whole, combine to create a form. See
          related
          <code>search</code>.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-grid">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#grid">grid</a></code>
        </td>
        <td></td>

        <td>A grid is an interactive control which contains cells of tabular data arranged in rows and columns, like a table.
        </td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-level">aria-level</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-multiselectable">
            aria-multiselectable</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-readonly">aria-readonly</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
            aria-activedescendant</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <a title="aria-colcount" href="https://www.w3.org/TR/wai-aria-1.1/#aria-colcount">
                <code>
            aria-colcount</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a title="aria-rowcount" href="https://www.w3.org/TR/wai-aria-1.1/#aria-rowcount">
                <code>
            aria-rowcount</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>
          </ul>
        </td>

        <td>
          <p>
            <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
            </a>
          </p>

          <p>
            <a href="https://w3c.github.io/html/dom.html#interactive-content">
              Interactive content</a>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-gridcell">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#gridcell">gridcell</a></code>
        </td>
        <td></td>

        <td>A cell in a grid or treegrid.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-readonly">aria-readonly</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-required">aria-required</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-selected">aria-selected
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-colindex">
                <code>
            aria-colindex</code>
              </a>
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-colspan">
                <code>
            aria-colspan</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-rowindex">
                <code>
            aria-rowindex</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-rowspan">
                <code>
            aria-rowspan</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>
          </ul>
        </td>

        <td>
          <p>
            <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
            </a>
          </p>

          <p>
            <a href="https://w3c.github.io/html/dom.html#interactive-content">
              Interactive content</a>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-group">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#group">group</a></code>
        </td>
        <td></td>

        <td>A set of user interface objects which are not intended to be included in a page summary or table of contents by assistive
          technologies.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
            aria-activedescendant</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-heading">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#heading">heading</a></code>
        </td>
        <td></td>

        <td>A heading for a section of the page.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-level">aria-level</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#heading-content">Heading content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>, but with no
          <a href="https://w3c.github.io/html/dom.html#heading-content">Heading content
          </a>,
          <a href="https://w3c.github.io/html/dom.html#sectioning-content-2">Sectioning content
          </a>
          <a href="https://w3c.github.io/html/dom.html#phrasing-content-2"></a>,
          <a href="https://w3c.github.io/html/sections.html#sectioning-roots">
            Sectioning roots</a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-img">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#img">img</a></code>
        </td>
        <td></td>

        <td>A container for a collection of elements that form an image.
        </td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-link">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#link">link</a></code>
        </td>
        <td></td>

        <td>An interactive reference to an internal or external resource that, when activated, causes the user agent to navigate
          to that resource. See related
          <code>button</code>.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>, but with no
          <a href="https://w3c.github.io/html/dom.html#interactive-content-2">
            interactive content</a> or
          <a href="https://w3c.github.io/html/textlevel-semantics.html#elementdef-a">
            a</a> element descendants.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-list">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#list">list</a></code>
        </td>
        <td></td>

        <td>A group of non-interactive list items. See related
          <code>listbox</code>.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-listbox">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#listbox">listbox</a></code>
        </td>
        <td></td>

        <td>A widget that allows the user to select one or more items from a list of choices. See related
          <code>combobox</code> and
          <code>list</code>.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-required">aria-required</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-multiselectable">
            aria-multiselectable</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
            aria-activedescendant</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-orientation">
                <code>
            aria-orientation</code>
              </a>
              <span class="changed-feature">(changed)</span>
            </li>
          </ul>
        </td>

        <td>
          <p>
            <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
            </a>
          </p>

          <p>
            <a href="https://w3c.github.io/html/dom.html#interactive-content">
              Interactive content</a>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-listitem">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#listitem">listitem</a></code>
        </td>
        <td></td>

        <td>A single item in a
          <code>list</code> or
          <code>directory</code>.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-level">aria-level</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-posinset">aria-posinset</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-setsize">aria-setsize</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-log">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#log">log</a></code>
        </td>
        <td></td>

        <td>A type of live region where new information is added in meaningful order and old information may disappear. See related
          <code>marquee</code>.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-main">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#main">main</a></code>
        </td>
        <td><code>&lt;main&gt;</code></td>

        <td>The main content of a document.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>, but with no
          <a href="https://w3c.github.io/html/grouping-content.html#elementdef-main">
            main</a> element descendants</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-marquee">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#marquee">marquee</a></code>
        </td>
        <td></td>

        <td>A type of live region where non-essential information changes frequently. See related
          <code>log</code>.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-math">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#math">math</a></code>
        </td>
        <td></td>

        <td>Content that represents a mathematical expression.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-menu">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#menu">menu</a></code>
        </td>
        <td></td>

        <td>A type of widget that offers a list of choices to the user.
        </td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
            aria-activedescendant</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-orientation">
                <code>
            aria-orientation</code>
              </a> -
              <span class="changed-feature">(changed)</span>
            </li>
          </ul>
        </td>

        <td>
          <p>
            <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
            </a>
          </p>

          <p>
            <a href="https://w3c.github.io/html/dom.html#interactive-content">
              Interactive content</a>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-menubar">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#menubar">menubar</a></code>
        </td>
        <td></td>

        <td>A presentation of menu that usually remains visible and is usually presented horizontally.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
            aria-activedescendant</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-orientation">
                <code>
            aria-orientation</code>
              </a> -
              <span class="changed-feature">(changed)</span>
            </li>
          </ul>
        </td>

        <td>
          <p>
            <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
            </a>
          </p>

          <p>
            <a href="https://w3c.github.io/html/dom.html#interactive-content">
              Interactive content</a>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-menuitem">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#menuitem">menuitem</a></code>
        </td>
        <td></td>

        <td>An option in a group of choices contained by a
          <code>menu</code> or
          <code>menubar</code>.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-posinset">
                <code>
            aria-posinset</code>
              </a>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-setsize">
                <code>
            aria-setsize</code>
              </a>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#interactive-content">Interactive content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>, but with no
          <a href="https://w3c.github.io/html/dom.html#interactive-content-2">
            interactive content</a> descendants.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-menuitemcheckbox">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#menuitemcheckbox">menuitemcheckbox</a></code>
        </td>
        <td></td>

        <td>A checkable menuitem that has three possible values: true, false, or mixed.</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-checked">aria-checked
            (state)</a></code>
            </li>
          </ul>
        </td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-posinset">aria-posinset</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-setsize">
                <code>
            aria-setsize</code>
              </a>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#interactive-content">Interactive content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>, but with no
          <a href="https://w3c.github.io/html/dom.html#interactive-content-2">
            interactive content</a> descendants.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-menuitemradio">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#menuitemradio">menuitemradio</a></code>
        </td>
        <td></td>

        <td>A checkable menuitem in a group of
          <code>menuitemradio</code> roles, only one of which can be checked at a time.</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-checked">aria-checked
            (state)</a></code>
            </li>
          </ul>
        </td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-posinset">aria-posinset</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-selected">aria-selected
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-setsize">aria-setsize</a></code>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#interactive-content">Interactive content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>, but with no
          <a href="https://w3c.github.io/html/dom.html#interactive-content-2">
            interactive content</a> descendants.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-navigation">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#navigation">navigation</a></code>
        </td>
        <td><code>&lt;nav&gt;</code></td>

        <td>A collection of navigational elements (usually links) for navigating the document or related documents.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>, but with no
          <a href="https://w3c.github.io/html/grouping-content.html#elementdef-main">
            main</a> element descendants</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-none">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#none">none</a></code> -
          <span class="new-feature">(new)</span>
        </td>

        <td>An element whose implicit native role semantics will not be mapped to the accessibility
          <abbr title="Application Programing Interfaces">API</abbr>. See synonym
          <a href="#index-aria-presentation">presentation</a>
        </td>

        <td>none</td>

        <td>&nbsp;</td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-note">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#note">note</a></code>
        </td>
        <td></td>

        <td>A section whose content is parenthetic or ancillary to the main content of the resource.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-option">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#option">option</a></code>
        </td>
        <td></td>

        <td>A selectable item in a select list.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-checked">aria-checked
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-posinset">aria-posinset</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-selected">aria-selected
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-setsize">aria-setsize</a></code>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#interactive-content">Interactive content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>, but with no
          <a href="https://w3c.github.io/html/dom.html#interactive-content-2">
            interactive content</a> descendants.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-presentation">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#presentation">presentation</a></code>
        </td>
        <td></td>

        <td>An element whose implicit native role semantics will not be mapped to the accessibility
          <abbr title="Application Programing Interfaces">API</abbr>.</td>

        <td>none</td>

        <td></td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-progressbar">
          <code><a href="https://www.w3.org/TR/wai-aria-1.1/#progressbar">
        progressbar</a></code>
        </td>
        <td></td>

        <td>An element that displays the progress status for tasks that take a long time.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuemax">aria-valuemax</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuemin">aria-valuemin</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuenow">aria-valuenow</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuetext">aria-valuetext</a></code>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-radio">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#radio">radio</a></code>
        </td>
        <td></td>

        <td>A checkable input in a group of radio roles, only one of which can be checked at a time.</td>

        <td>
          <ul>
            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-checked">
                <code>
            aria-checked (state)</code>
              </a>
            </li>
          </ul>
        </td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-posinset">aria-posinset</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-selected">aria-selected
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-setsize">aria-setsize</a></code>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#interactive-content">Interactive content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>, but with no
          <a href="https://w3c.github.io/html/dom.html#interactive-content-2">
            interactive content</a> descendants.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-radiogroup">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#radiogroup">radiogroup</a></code>
        </td>
        <td></td>

        <td>A group of radio buttons.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-required">aria-required</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
            aria-activedescendant</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-orientation">
                <code>
            aria-orientation</code>
              </a> -
              <span class="changed-feature">(changed)</span>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-region">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#region">region</a></code>
        </td>
        <td><code>&lt;section&gt;</code></td>

        <td>A large perceivable section of a web page or document, that the author feels is important enough to be included in
          a page summary or table of contents, for example, an area of the page containing live sporting event statistics.
        
        <em>This role is not a landmark.</em>
        </td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-row">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#row">row</a></code>
        </td>
        <td></td>

        <td>
          <p>A row of cells in a tabular container.</p>
        </td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-colindex">
                <code>
            aria-colindex</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <code><a title="aria-rowindex" href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-rowindex">aria-rowindex</a></code> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-level">aria-level</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-selected">aria-selected
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
            aria-activedescendant</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>
          </ul>
        </td>

        <td>none</td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-rowgroup">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#rowgroup">rowgroup</a></code>
        </td>
        <td></td>

        <td>A group containing one or more row elements in a grid.
        </td>

        <td>none</td>

        <td>&nbsp;</td>

        <td>none</td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-rowheader">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#rowheader">rowheader</a></code>
        </td>
        <td></td>

        <td>A cell containing header information for a row in a grid.
        </td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-readonly">aria-readonly</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-required">aria-required</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-selected">aria-selected
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-colspan">
                <code>
            aria-colspan</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-colindex">
                <code>
            aria-colindex</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-rowindex">
                <code>
            aria-rowindex</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-rowspan">
                <code>
            aria-rowspan</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>
          </ul>
        </td>

        <td>none</td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-scrollbar">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#scrollbar">scrollbar</a></code>
        </td>
        <td></td>

        <td>A graphical object that controls the scrolling of content within a viewing area, regardless of whether the content
          is fully displayed within the viewing area.</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-controls">aria-controls</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-orientation">aria-orientation</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuemax">aria-valuemax</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuemin">aria-valuemin</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuenow">aria-valuenow</a></code>
            </li>
          </ul>
        </td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuetext">aria-valuetext</a></code>
            </li>
          </ul>
        </td>

        <td>
          <p>
            <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
            </a>
          </p>

          <p>
            <a href="https://w3c.github.io/html/dom.html#interactive-content">
              Interactive content</a>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-search">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#search">search</a></code>
        </td>
        <td></td>

        <td>A landmark region that contains a collection of items and objects that, as a whole, combine to create a search facility.
          See related
          <code>form</code> .</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>
          </ul>
        </td>

        <td>
          <p>
            <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
            </a>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-searchbox">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#searchbox">searchbox</a></code> -
          <span class="new-feature">(new)</span>
        </td>

        <td>A type of textbox intended for specifying search criteria.
        </td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
            aria-activedescendant</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-autocomplete">
            aria-autocomplete</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-multiline">aria-multiline</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-placeholder">aria-placeholder</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-readonly">aria-readonly</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-required">aria-required</a></code>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#interactive-content">Interactive content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>, but with no
          <a href="https://w3c.github.io/html/dom.html#interactive-content-2">
            interactive content</a> descendants.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-separator">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#separator">separator</a></code>
        </td>
        <td></td>

        <td>A divider that separates and distinguishes sections of content or groups of menuitems.</td>

        <td>
          <ul>
            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-valuemax">
                <code>
            aria-valuemax</code>
              </a> (if focusable) -
              <span class="changed-feature">(changed)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-valuemin">
                <code>
            aria-valuemin</code>
              </a> (if focusable) -
              <span class="changed-feature">(changed)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-valuenow">
                <code>
            aria-valuenow</code>
              </a> (if focusable) -
              <span class="changed-feature">(changed)</span>
            </li>
          </ul>
        </td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuetext">aria-valuetext</a></code> (if focusable)</li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-orientation">
                <code>
            aria-orientation</code>
              </a>
              <span class="changed-feature">(changed)</span>
            </li>
          </ul>
        </td>

        <td>
          <p>&nbsp;</p>

          <p>
            <a href="https://w3c.github.io/html/dom.html#interactive-content">
              Interactive content</a> (if focusable)</p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-slider">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#slider">slider</a></code>
        </td>
        <td></td>

        <td>A user input where the user selects a value from within a given range.</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuemax">aria-valuemax</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuemin">aria-valuemin</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuenow">aria-valuenow</a></code>
            </li>
          </ul>
        </td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-orientation">aria-orientation</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuetext">aria-valuetext</a></code>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#interactive-content">Interactive content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-spinbutton">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#spinbutton">spinbutton</a></code>
        </td>
        <td></td>

        <td>A form of range that expects the user to select from among discrete choices.</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuemax">aria-valuemax</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuemin">aria-valuemin</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuenow">aria-valuenow</a></code>
            </li>
          </ul>
        </td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-required">aria-required</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-readonly">aria-readonly</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-valuetext">aria-valuetext</a></code>
            </li>
          </ul>
        </td>

        <td>
          <p>
            <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
            </a>
          </p>

          <p>
            <a href="https://w3c.github.io/html/dom.html#interactive-content">
              Interactive content</a>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-status">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#status">status</a></code>
        </td>
        <td></td>

        <td>A container whose content is advisory information for the user but is not important enough to justify an alert, often
          but not necessarily presented as a status bar. See related
          <code>alert</code>.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <p>
            <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
            </a>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-switch">
          <a href="https://www.w3.org/TR/wai-aria-1.1/#switch">
            <code>switch</code>
          </a>
          -
          <span class="new-feature">(new)</span>
        </td>

        <td>A type of checkbox that represents on/off values, as opposed to checked/unchecked values.</td>

        <td>
          <ul>
            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-checked">
                <code>
            aria-checked (state)</code>
              </a>
            </li>
          </ul>
        </td>

        <td>
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#aria-readonly">aria-readonly</a></code>
        </td>
        <td></td>

        <td>
          <p>
            <a href="https://w3c.github.io/html/dom.html#interactive-content">
              Interactive content</a>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>, but with no
          <a href="https://w3c.github.io/html/dom.html#interactive-content-2">
            interactive content</a> descendants.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-tab">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#tab">tab</a></code>
        </td>
        <td></td>

        <td>A grouping label providing a mechanism for selecting the tab content that is to be rendered to the user.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-selected">aria-selected
            (state)</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-posinset">
                <code>
            aria-posinset</code>
              </a>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-setsize">
                <code>
            aria-setsize</code>
              </a>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>
          </ul>
        </td>

        <td>
          <p>
            <a href="https://w3c.github.io/html/dom.html#interactive-content">
              Interactive content</a>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-table">
          <a href="https://www.w3.org/TR/wai-aria-1.1/#table">
            <code>table</code>
          </a>
          -
          <span class="new-feature">(new)</span>
        </td>

        <td>A section containing data arranged in rows and columns. The table role is intended for tabular containers which are
          not interactive.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <a title="aria-colcount" href="https://www.w3.org/TR/wai-aria-1.1/#aria-colcount">
                <code>
            aria-colcount</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a title="aria-rowcount" href="https://www.w3.org/TR/wai-aria-1.1/#aria-rowcount">
                <code>
            aria-rowcount</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-tablist">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#tablist">tablist</a></code>
        </td>
        <td></td>

        <td>A list of tab elements, which are references to tabpanel elements.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-level">aria-level</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
            aria-activedescendant</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-orientation">
                <code>
            aria-orientation</code>
              </a> -
              <span class="changed-feature">(changed)</span>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-multiselectable">
                <code>aria-multiselectable</code>
              </a>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-tabpanel">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#tabpanel">tabpanel</a></code>
        </td>
        <td></td>

        <td>A container for the resources associated with a
          <code>tab</code>, where each
          <code>tab</code> is contained in a
          <code>tablist</code>.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td id="index-aria-term" tabindex="-1">
          <a href="https://www.w3.org/TR/wai-aria-1.1/#term">
            <code>term</code>
          </a>
          -
          <span class="new-feature">(new)</span>
        </td>

        <td>A word or phrase with a corresponding definition. See related
          <a href="#index-aria-definition">definition</a>.</td>

        <td>none</td>

        <td>
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
        (state)</a></code>
        </td>
        <td></td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#phrasing-content">Phrasing content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#phrasing-content">Phrasing content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-textbox">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#textbox">textbox</a></code>
        </td>
        <td></td>

        <td>Input that allows free-form text as its value.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
            aria-activedescendant</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-autocomplete">
            aria-autocomplete</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-multiline">aria-multiline</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-placeholder">aria-placeholder</a></code> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-readonly">aria-readonly</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-required">aria-required</a></code>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#interactive-content">Interactive content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>, but with no
          <a href="https://w3c.github.io/html/dom.html#interactive-content-2">
            interactive content</a> descendants.</td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-timer">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#timer">timer</a></code>
        </td>
        <td></td>

        <td>A type of live region containing a numerical counter which indicates an amount of elapsed time from a start point,
          or the time remaining until an end point.</td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-toolbar">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#toolbar">toolbar</a></code>
        </td>
        <td></td>

        <td>A collection of commonly used function buttons represented in compact visual form.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
            aria-activedescendant</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-orientation">
                <code>
            aria-orientation</code>
              </a> -
              <span class="changed-feature">(changed)</span>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-tooltip">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#tooltip">tooltip</a></code>
        </td>
        <td></td>

        <td>A contextual popup that displays a description for an element.
        </td>

        <td>none</td>

        <td>
          <p>
            <code><a href=
          "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
          (state)</a></code>
          </p>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-tree">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#tree">tree</a></code>
        </td>
        <td></td>

        <td>A type of list that may contain sub-level nested groups that can be collapsed and expanded.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-multiselectable">
            aria-multiselectable</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-required">aria-required</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
            aria-activedescendant</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-orientation">
                <code>
            aria-orientation</code>
              </a> -
              <span class="changed-feature">(changed)</span>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-treegrid">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#treegrid">treegrid</a></code>
        </td>
        <td></td>

        <td>A grid whose rows can be expanded and collapsed in the same manner as for a tree.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-level">aria-level</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-multiselectable">
            aria-multiselectable</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-readonly">aria-readonly</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-activedescendant">
            aria-activedescendant</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-required">aria-required</a></code>
            </li>

            <li>
              <a href="https://www.w3.org/TR/wai-aria-1.1/#aria-orientation">
                <code>
            aria-orientation</code>
              </a> -
              <span class="changed-feature">(changed)</span>
            </li>

            <li>
              <a title="aria-colcount" href="https://www.w3.org/TR/wai-aria-1.1/#aria-colcount">
                <code>
            aria-colcount</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>

            <li>
              <a title="aria-rowcount" href="https://www.w3.org/TR/wai-aria-1.1/#aria-rowcount">
                <code>
            aria-rowcount</code>
              </a> -
              <span class="new-feature">(new)</span>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>

      <tr>
        <td tabindex="-1" id="index-aria-treeitem">
          <code><a href=
        "https://www.w3.org/TR/wai-aria-1.1/#treeitem">treeitem</a></code>
        </td>
        <td></td>

        <td>An option item of a tree. This is an element within a tree that may be expanded or collapsed if it contains a sub-level
          group of treeitems.</td>

        <td>none</td>

        <td>
          <ul>
            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-level">aria-level</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-posinset">aria-posinset</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-setsize">aria-setsize</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-expanded">aria-expanded
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-checked">aria-checked
            (state)</a></code>
            </li>

            <li>
              <code><a href=
            "https://www.w3.org/TR/wai-aria-1.1/#aria-selected">aria-selected
            (state)</a></code>
            </li>
          </ul>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#interactive-content">Interactive content
          </a>
        </td>

        <td>
          <a href="https://w3c.github.io/html/dom.html#flow-content">Flow content
          </a>
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>