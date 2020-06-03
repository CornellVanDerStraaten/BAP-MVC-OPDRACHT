<ul>
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
    </li>
    <li>
        <a href="<?php echo url( 'registration' ) ?>"<?php if ( current_route_is( 'registration' ) ): ?> class="active"<?php endif ?>>Registreren</a>
    </li>
</ul>