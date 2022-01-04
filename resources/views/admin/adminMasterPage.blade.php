
<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.1.0
* @link https://coreui.io
* Copyright (c) 2021 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
@include('admin.partials.head')
<body>
@include('admin.partials.header')
@include('admin.partials.sidebar')
@yield('content')
<!-- CoreUI and necessary plugins-->
<script src="/afracode/admin/login/node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
<script src="/afracode/admin/login/node_modules/simplebar/dist/simplebar.min.js"></script>
<!-- We use those scripts to show code examples, you should remove them in your application.-->
<script src="/afracode/admin/login/https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
<script src="/afracode/admin/login/https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
<script src="/afracode/admin/login/https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
<script src="/afracode/admin/login/https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>
<script>
</script>
</body>
</html>
