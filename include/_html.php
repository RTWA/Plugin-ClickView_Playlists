<?php $size = explode('|', $this->settings['size']); ?>

<div class="CVPlaylists">
    <div style="width:<?php echo $size[0] - 12; ?>px; height:<?php echo $size[1] - 8; ?>px;margin-top:8px;">
        <div class="ff-style-paper-lined">
            <div class="CVcontainer">
                <a href="<?php echo $this->settings['url']; ?>" target="_blank" class="playBut">
                    <img src="data:image/png;base64,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">
                    <svg enableBackground="new 0 0 213.7 213.7" version="1.1" viewBox="0 0 213.7 213.7"
                         xmlSpace="preserve" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="triangle" points="73.5 62.5 148.5 105.8 73.5 149.1" />
                        <circle class="circle" cx="106.8" cy="106.8" r="80" />
                    </svg>
                    <p><?php echo $this->settings['title']; ?></p>
                </a>
            </div>
        </div>
    </div>
</div>