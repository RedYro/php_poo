<?php
    use function A\ville;
    use function A\strlen;
    use function B\ville as BVille;
    use function B\strlen as BStrlen;

    require_once("Namespace_ab.php");

    echo "<h2>Sans \"use function\"</h2>";
    echo A\ville();
    echo A\strlen();

    echo B\ville();
    echo B\strlen();

    echo "<h2>Avec \"use function\"</h2>";
    echo ville();
    echo strlen();

    echo BVille();
    echo BStrlen();
?>