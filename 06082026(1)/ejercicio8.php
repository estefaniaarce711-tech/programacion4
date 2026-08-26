<?php

        $twitchHoras = $_POST["twitchHoras"];
        $twitchViewers = $_POST["twitchViewers"];
        $youtubeHoras = $_POST["youtubeHoras"];
        $youtubeViewers = $_POST["youtubeViewers"];

        // Calcular audiencia acumulada
        $audienciaTwitch = $twitchHoras * $twitchViewers;
        $audienciaYoutube = $youtubeHoras * $youtubeViewers;

        echo "<p>Audiencia acumulada Twitch: $audienciaTwitch</p>";
        echo "<p>Audiencia acumulada YouTube Gaming: $audienciaYoutube</p>";

        if ($audienciaTwitch > $audienciaYoutube) {
            echo "<p><strong>Twitch tuvo mayor audiencia acumulada este mes.</strong></p>";
        } elseif ($audienciaYoutube > $audienciaTwitch) {
            echo "<p><strong>YouTube Gaming tuvo mayor audiencia acumulada este mes.</strong></p>";
        } else {
            echo "<p><strong>Ambas plataformas tuvieron la misma audiencia acumulada.</strong></p>";
        }
    ?>