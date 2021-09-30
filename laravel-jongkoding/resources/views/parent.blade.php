<html>

<body>
    <!-- @includeIf('hi')
    @includeWhen($isExist, 'child')
    @includeUnless($isExist, 'child2') -->

    @includeFirst(['child','var'],['child2', 'add'])

    <!-- @include('halo', ['name'=>'JongKoding Parent', 'array'=>['hari','rabu']]) -->
</body>

</html>