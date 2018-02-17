Bootstrap 4 Readme
==================

All the PHP scripts required for integrating Bootstrap 4 into Progenitor are in this `functions/bootstrap-4` folder.

Many of the `functions/bootstrap-4` scripts contain build hooks for various components.

These build hook names do not mention Bootstrap, nor do they use names familiar to Bootstrap 4 (e.g. the "header_nav" is is not named "navbar").

This is deliberate. It allows developers who do not want to use Bootstrap 4 to swap these components for their other similar-purposed components that are designed for other CSS/JS frameworks.

In your child theme, you can totally disengage Bootstrap from Progenitor comply by overwriting one pluggable function: the `progenitor_framework()` located in `functions/framework.php`. So if you add this empty function in your child theme, you've disengaged Bootstrap:

  progenitor_framework() {
    // Empty
  }

Progenitor contains fallback functions with simple alternatives to the Progenitor Bootstrap PHP scripts -- so, if you disengage Bootstrap, you will see those simple alternatives instead of errors.

We welcome the contribution of child themes to the Progenitor project with alternative CSS/JS front-end frameworks.

Note: some of the Progenitor Bootstrap 4 PHP scripts use Font Awesome 5 icons. If you disengage Font Awesome 5, then you will need to configure alternative icons instead (see `functions/font-awesome-5/font-awesome-5-readme.txt`).
