<?php

class Instagram extends SocialMedia
{
    public function chat(): void
    {
        echo "Mengirim pesan teks melalui Direct Message Instagram" . "<br>";
    }

    public function sendPhotosAndVideos(): void
    {
        echo "Mengirim foto dan video melalui postingan Instagram" . "<br>";
    }
}
