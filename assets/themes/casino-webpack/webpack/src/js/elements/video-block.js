window.addEventListener("load", function(event) {
    const video_blocks = document.querySelectorAll('.video__block');

    if (video_blocks) {
        video_blocks.forEach((video_block) => {
            video_block.addEventListener('click', () => {
                const link = video_block.getAttribute('data-iframe') + '?autoplay=1&mute=1';
                const btn = video_block.querySelector('.video__block_btn');

                btn.style.display = 'none';
                const iframe = document.createElement('iframe');
                iframe.src = link;
                iframe.allowfullscreen = '';
                iframe.allow = 'autoplay';
                video_block.appendChild(iframe);
                iframe.onload = function() {
                    iframe.contentWindow.postMessage(JSON.stringify({method: "play"}), "*");
                };

            })
        })
    }
})