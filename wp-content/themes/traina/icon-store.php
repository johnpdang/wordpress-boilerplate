<?php
function traina_get_svg_icon($icon_to_get, $echo = true) {
    switch($icon_to_get) {
        case 'dots_6_vertical':
            $html = '<svg aria-hidden="true" width="5" height="80" class="dot_accent dots_vertical_6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5 80"><style>.st-dots-v-6{fill:#fff}</style><path class="st-dots-v-6" d="M1.9 15.2c1.6-.4 3.1 1 2.7 2.7-.2.8-.8 1.4-1.6 1.6-1.6.4-3.1-1.1-2.7-2.7.2-.7.9-1.4 1.6-1.6zM1.9 30.3c1.6-.4 3.1 1 2.7 2.7-.2.8-.8 1.4-1.6 1.6-1.6.4-3-1-2.6-2.7.1-.7.8-1.4 1.5-1.6zM1.9.1c1.6-.4 3.1 1 2.7 2.7-.1.8-.8 1.4-1.6 1.6-1.6.4-3-1.1-2.6-2.7C.5.9 1.2.3 1.9.1zM1.9 45.4c1.6-.4 3.1 1 2.7 2.7-.2.8-.8 1.4-1.6 1.6-1.6.4-3-1-2.6-2.7.1-.7.8-1.4 1.5-1.6zM1.9 60.5c1.6-.4 3.1 1 2.7 2.7-.1.8-.8 1.4-1.6 1.6-1.6.4-3.1-1.1-2.7-2.7.2-.7.9-1.4 1.6-1.6zM1.9 75.6c1.6-.4 3.1 1 2.7 2.7-.2.8-.8 1.4-1.6 1.6-1.6.4-3.1-1.1-2.7-2.7.2-.8.9-1.4 1.6-1.6z"/></svg>';
        break;
        case 'logo':
            $html = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="101" height="100"><defs><path id="a" d="M0 99.431h100.563V0H0z"/></defs><g fill="none" fill-rule="evenodd"><path fill="#0A436A" d="M17.188 18.031c-.378-1.111-.871-1.585-1.66-1.585-.805 0-1.249.49-1.249 1.29 0 1.782 5.06 1.913 5.06 5.606 0 2.027-1.396 3.367-3.777 3.367-1.842 0-3.27-.998-3.878-3.318l2.234-.474c.263 1.422 1.085 1.929 1.758 1.929.789 0 1.397-.524 1.397-1.406 0-2.222-5.061-2.255-5.061-5.556 0-2.026 1.216-3.301 3.566-3.301 2.02 0 3.253 1.193 3.648 2.86l-2.038.588zm3.761 8.514V14.746h2.07v3.922c.69-.654 1.397-1.176 2.25-1.176 1.266 0 1.923.637 1.923 2.288v6.765h-2.07v-6.537c0-.588-.198-.98-.756-.98-.427 0-.904.408-1.348.8v6.717h-2.07zm12.304-4.347c-1.232.425-2.48 1.111-2.48 2.043 0 .588.361.931.92.931.624 0 1.068-.327 1.56-.817v-2.157zm-4.288-1.945c.148-1.977 1.66-2.762 3.32-2.762 2.2 0 3.038 1.112 3.038 2.697v5.638c0 .245.05.49.116.719h-2.07c-.05-.228-.082-.506-.149-.866-.607.605-1.429 1.03-2.464 1.03-1.249 0-2.054-.686-2.054-2.125 0-2.06 1.972-2.941 4.551-3.71v-.653c0-.768-.476-1.063-1.068-1.063-.624 0-1.15.458-1.15 1.095h-2.07zm7.639-2.598h1.938l1.2 5.556h.033l1.2-5.556h1.774l1.265 5.556h.033l1.134-5.556h1.938l-2.102 8.89h-1.94l-1.265-5.556h-.033l-1.1 5.556H38.74zm-20.846 16.97l1.923-4.756h2.415l-3.237 7.027v4.772h-2.267v-4.772l-3.237-7.027h2.415zm6.522 4.363c0 .686.494 1.046 1.217 1.046.723 0 1.215-.36 1.215-1.046v-3.53c0-.687-.492-1.046-1.215-1.046-.723 0-1.216.36-1.216 1.046v3.53zm-2.07-3.007c0-2.353 1.217-3.367 3.287-3.367s3.286 1.014 3.286 3.367v2.484c0 2.353-1.216 3.366-3.286 3.366-2.07 0-3.286-1.013-3.286-3.366v-2.484zm12.552-1.193c-.41-.441-.789-.638-1.249-.638-.558 0-1.018.36-1.018 2.125v1.896c0 1.765.46 2.124 1.018 2.124.46 0 .839-.196 1.25-.637v-4.87zm.164 6.88V40.59h-.032c-.362.556-1.282 1.242-2.202 1.242-1.61 0-2.268-1.242-2.268-3.53v-2.157c0-2.287.658-3.53 2.268-3.53.558 0 1.084.262 2.07.981V29.87h2.07v11.8h-1.906zm8.214-5.622v-.49c0-.785-.378-1.274-1.216-1.274s-1.216.49-1.216 1.274v.49h2.432zm-2.432 1.667v1.177c0 .882.526 1.274 1.216 1.274.871 0 1.216-.555 1.216-1.242h2.07c-.098 1.83-1.199 2.91-3.286 2.91-1.971 0-3.286-1.21-3.286-3.155v-2.909c0-1.944 1.315-3.154 3.286-3.154 1.922 0 3.286 1.21 3.286 3.024v2.075h-4.502zm6.309 3.955v-8.89h2.02v1.177h.034c.475-.883 1.1-1.34 2.135-1.34v2.222c-.345-.098-.739-.229-1.1-.229-.675 0-1.02.507-1.02.98v6.08h-2.07zM14.608 52.313h2.25l-1.1-4.772h-.032l-1.118 4.772zm-3.236 4.477l2.94-11.798h2.908l2.86 11.798h-2.17l-.574-2.483h-3.138l-.641 2.483h-2.185zm9.905 0V47.9h2.005v1.014c.756-.654 1.462-1.176 2.316-1.176 1.265 0 1.923.637 1.923 2.287v6.766h-2.07v-6.537c0-.589-.198-.98-.756-.98-.428 0-.904.408-1.348.8v6.717h-2.07zm7.327-6.83v-1.667h.821v-2.419h2.07v2.419h1.331v1.667h-1.33v4.543c0 .441.378.653.935.653.149 0 .28 0 .412-.016v1.732a7.17 7.17 0 0 1-1.183.082c-1.348 0-2.235-.49-2.235-1.765v-5.23h-.821zm4.682-2.06h1.938l1.2 5.557h.033l1.2-5.556h1.774l1.265 5.556h.033l1.133-5.556h1.939l-2.103 8.89H39.76l-1.265-5.556h-.033l-1.1 5.556h-1.939z"/><mask id="b" fill="#fff"><use xlink:href="#a"/></mask><path fill="#0A436A" d="M45.278 56.79h2.069v-8.889h-2.07v8.89zm0-10.425h2.069V44.5h-2.07v1.864zm4.304 10.425V44.993h2.07v3.922c.69-.654 1.397-1.176 2.25-1.176 1.266 0 1.924.637 1.924 2.287v6.766h-2.071v-6.537c0-.589-.198-.98-.755-.98-.428 0-.905.408-1.348.8v6.717h-2.07zM17.188 63.4c-.378-1.112-.871-1.586-1.66-1.586-.805 0-1.249.49-1.249 1.29 0 1.782 5.06 1.913 5.06 5.606 0 2.027-1.396 3.367-3.777 3.367-1.842 0-3.27-.997-3.878-3.318l2.234-.474c.263 1.422 1.085 1.929 1.758 1.929.789 0 1.397-.523 1.397-1.406 0-2.222-5.061-2.255-5.061-5.556 0-2.026 1.216-3.3 3.566-3.3 2.02 0 3.253 1.192 3.648 2.86l-2.038.587zm8.098 2.696v-.393c0-.686-.493-1.046-1.216-1.046s-1.216.36-1.216 1.046v3.53c0 .687.493 1.046 1.216 1.046s1.216-.359 1.216-1.045v-.557h2.07v.034c0 2.353-1.216 3.366-3.286 3.366-2.07 0-3.286-1.013-3.286-3.366v-2.485c0-2.353 1.217-3.366 3.286-3.366 2.02 0 3.237.98 3.27 3.236h-2.054zm3.876 5.817V60.114h2.07v3.923c.69-.654 1.398-1.177 2.251-1.177 1.266 0 1.923.637 1.923 2.288v6.765h-2.07v-6.537c0-.588-.198-.98-.756-.98-.427 0-.904.409-1.348.8v6.717h-2.07zm8.214-8.89h2.005v1.014c.673-.605 1.347-1.177 2.217-1.177.773 0 1.332.523 1.578 1.34.64-.703 1.298-1.34 2.202-1.34 1.248 0 1.889.751 1.889 2.353v6.7h-2.07v-6.765c0-.588-.213-.752-.542-.752-.395 0-1.035.458-1.299.8v6.717h-2.07v-6.765c0-.588-.23-.752-.558-.752-.444 0-1.036.458-1.282.8v6.717h-2.07v-8.89zm16.197 3.269v-.49c0-.785-.378-1.275-1.215-1.275-.839 0-1.216.49-1.216 1.275v.49h2.431zm-2.431 1.666v1.177c0 .883.526 1.275 1.216 1.275.87 0 1.215-.556 1.215-1.242h2.07c-.098 1.83-1.198 2.91-3.285 2.91-1.972 0-3.286-1.21-3.286-3.155v-2.91c0-1.944 1.314-3.153 3.286-3.153 1.922 0 3.286 1.209 3.286 3.024v2.074h-4.502zm6.571 3.956h2.07v-11.8h-2.07zm4.156-8.891h5.948v1.765l-3.796 5.328h3.796v1.797H61.54V70.15l3.73-5.328h-3.4zm11.779 3.269v-.49c0-.785-.378-1.275-1.216-1.275s-1.216.49-1.216 1.275v.49h2.432zm-2.432 1.666v1.177c0 .883.526 1.275 1.216 1.275.87 0 1.216-.556 1.216-1.242h2.07c-.099 1.83-1.199 2.91-3.286 2.91-1.971 0-3.286-1.21-3.286-3.155v-2.91c0-1.944 1.315-3.153 3.286-3.153 1.922 0 3.286 1.209 3.286 3.024v2.074h-4.502zm6.308 3.955v-8.89h2.02V64.2h.034c.477-.882 1.101-1.34 2.136-1.34v2.222c-.345-.098-.74-.228-1.1-.228-.675 0-1.02.506-1.02.98v6.08h-2.07z" mask="url(#b)"/><path fill="#FF9F00" d="M14.624 77.721c0 .686.28 1.21.675 1.863.624-.555 1.413-1.094 1.413-2.042 0-.507-.362-1.095-1.052-1.095-.657 0-1.036.555-1.036 1.274zm1.053 7.616c.607 0 1.198-.278 1.527-.654a17.88 17.88 0 0 1-2.366-2.517c-.509.393-.854.785-.854 1.471 0 1.144.821 1.7 1.693 1.7zm5.635-3.726c-.378.98-.805 1.977-1.413 2.941.476.327 1.035.588 1.643.654V87.2c-1.134 0-1.874-.262-2.991-1.21a4.22 4.22 0 0 1-2.974 1.21c-2.283 0-3.86-1.112-3.86-3.269 0-1.634.82-2.5 2.004-3.268-.624-.932-.97-1.667-.97-2.648 0-2.026 1.43-2.94 3.04-2.94s2.793 1.176 2.793 2.662c0 1.52-1.183 2.403-2.284 3.27a18.52 18.52 0 0 0 2.12 2.401c.427-.768.838-1.487 1.068-2.304l1.824.507z" mask="url(#b)"/><path fill="#0A436A" d="M25.071 87.036v-11.8h2.268v9.807h3.647v1.993zm11.352-4.346c-1.232.424-2.481 1.11-2.481 2.042 0 .588.362.931.92.931.625 0 1.068-.327 1.56-.817V82.69zm-4.288-1.945c.148-1.978 1.66-2.762 3.319-2.762 2.202 0 3.04 1.11 3.04 2.697v5.638c0 .244.049.49.115.718h-2.07c-.05-.229-.082-.506-.149-.866-.607.605-1.43 1.03-2.464 1.03-1.25 0-2.054-.687-2.054-2.125 0-2.059 1.972-2.941 4.55-3.71v-.653c0-.768-.476-1.062-1.067-1.062-.624 0-1.15.457-1.15 1.095h-2.07zm8.411 6.291v-8.89h2.005v1.013c.756-.654 1.462-1.176 2.316-1.176 1.265 0 1.923.637 1.923 2.287v6.766h-2.07v-6.537c0-.588-.198-.98-.756-.98-.428 0-.905.409-1.348.8v6.717h-2.07zm10.942-7.386c-.79 0-1.085.539-1.085 1.928 0 1.112.362 1.666.985 1.666.888 0 1.184-.326 1.184-1.879 0-1.143-.361-1.715-1.084-1.715zm-.953 7.778c-.215.212-.428.393-.428.72 0 .457.674.653 1.89.653.986 0 1.56-.245 1.56-.703 0-.294-.13-.425-.755-.474l-2.267-.196zm5.092-7.647c-.164-.034-.476-.131-.64-.131-.214 0-.427.114-.707.196.132.588.263 1.029.263 1.568 0 2.223-.952 3.497-2.99 3.497a2.62 2.62 0 0 1-.854-.114c-.115.163-.362.31-.362.523 0 1.112 5.192-.605 5.192 2.615 0 1.52-1.577 2.24-3.976 2.24-2.202 0-3.418-.622-3.418-1.62 0-.669.756-1.078 1.25-1.388-.494-.294-.856-.686-.856-1.258 0-.703.74-1.177 1.25-1.488-1.002-.653-1.348-1.601-1.348-3.088 0-1.912.74-3.35 3.057-3.35.853 0 1.807.392 2.332 1.03.526-.655 1.036-1.03 1.807-1.03v1.798zm5.683 1.634v-.49c0-.785-.377-1.275-1.215-1.275-.838 0-1.216.49-1.216 1.274v.49h2.432zm-2.43 1.666v1.177c0 .882.525 1.275 1.215 1.275.871 0 1.216-.556 1.216-1.242h2.07c-.098 1.83-1.199 2.909-3.286 2.909-1.971 0-3.286-1.21-3.286-3.155v-2.909c0-1.944 1.315-3.153 3.286-3.153 1.922 0 3.286 1.21 3.286 3.023v2.075H58.88zM2.885 94.318V2.87h91.943L97.714 0H0v97.187z" mask="url(#b)"/><path fill="#0A436A" d="M97.678 5.753v90.809h-91.3l-2.886 2.87h97.07V2.882z" mask="url(#b)"/></g></svg>';
        break;
        case 'logo-with-icon':
            $html = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 100 100"><defs><path id="a" d="M0 99.431h100.563V0H0z"/></defs><g fill="none" fill-rule="evenodd"><path fill="#0A436A" d="M17.188 18.031c-.378-1.111-.871-1.585-1.66-1.585-.805 0-1.249.49-1.249 1.29 0 1.782 5.06 1.913 5.06 5.606 0 2.027-1.396 3.367-3.777 3.367-1.842 0-3.27-.998-3.878-3.318l2.234-.474c.263 1.422 1.085 1.929 1.758 1.929.789 0 1.397-.524 1.397-1.406 0-2.222-5.061-2.255-5.061-5.556 0-2.026 1.216-3.301 3.566-3.301 2.02 0 3.253 1.193 3.648 2.86l-2.038.588zm3.761 8.514V14.746h2.07v3.922c.69-.654 1.397-1.176 2.25-1.176 1.266 0 1.923.637 1.923 2.288v6.765h-2.07v-6.537c0-.588-.198-.98-.756-.98-.427 0-.904.408-1.348.8v6.717h-2.07zm12.304-4.347c-1.232.425-2.48 1.111-2.48 2.043 0 .588.361.931.92.931.624 0 1.068-.327 1.56-.817v-2.157zm-4.288-1.945c.148-1.977 1.66-2.762 3.32-2.762 2.2 0 3.038 1.112 3.038 2.697v5.638c0 .245.05.49.116.719h-2.07c-.05-.228-.082-.506-.149-.866-.607.605-1.429 1.03-2.464 1.03-1.249 0-2.054-.686-2.054-2.125 0-2.06 1.972-2.941 4.551-3.71v-.653c0-.768-.476-1.063-1.068-1.063-.624 0-1.15.458-1.15 1.095h-2.07zm7.639-2.598h1.938l1.2 5.556h.033l1.2-5.556h1.774l1.265 5.556h.033l1.134-5.556h1.938l-2.102 8.89h-1.94l-1.265-5.556h-.033l-1.1 5.556H38.74zm-20.846 16.97l1.923-4.756h2.415l-3.237 7.027v4.772h-2.267v-4.772l-3.237-7.027h2.415zm6.522 4.363c0 .686.494 1.046 1.217 1.046.723 0 1.215-.36 1.215-1.046v-3.53c0-.687-.492-1.046-1.215-1.046-.723 0-1.216.36-1.216 1.046v3.53zm-2.07-3.007c0-2.353 1.217-3.367 3.287-3.367s3.286 1.014 3.286 3.367v2.484c0 2.353-1.216 3.366-3.286 3.366-2.07 0-3.286-1.013-3.286-3.366v-2.484zm12.552-1.193c-.41-.441-.789-.638-1.249-.638-.558 0-1.018.36-1.018 2.125v1.896c0 1.765.46 2.124 1.018 2.124.46 0 .839-.196 1.25-.637v-4.87zm.164 6.88V40.59h-.032c-.362.556-1.282 1.242-2.202 1.242-1.61 0-2.268-1.242-2.268-3.53v-2.157c0-2.287.658-3.53 2.268-3.53.558 0 1.084.262 2.07.981V29.87h2.07v11.8h-1.906zm8.214-5.622v-.49c0-.785-.378-1.274-1.216-1.274s-1.216.49-1.216 1.274v.49h2.432zm-2.432 1.667v1.177c0 .882.526 1.274 1.216 1.274.871 0 1.216-.555 1.216-1.242h2.07c-.098 1.83-1.199 2.91-3.286 2.91-1.971 0-3.286-1.21-3.286-3.155v-2.909c0-1.944 1.315-3.154 3.286-3.154 1.922 0 3.286 1.21 3.286 3.024v2.075h-4.502zm6.309 3.955v-8.89h2.02v1.177h.034c.475-.883 1.1-1.34 2.135-1.34v2.222c-.345-.098-.739-.229-1.1-.229-.675 0-1.02.507-1.02.98v6.08h-2.07zM14.608 52.313h2.25l-1.1-4.772h-.032l-1.118 4.772zm-3.236 4.477l2.94-11.798h2.908l2.86 11.798h-2.17l-.574-2.483h-3.138l-.641 2.483h-2.185zm9.905 0V47.9h2.005v1.014c.756-.654 1.462-1.176 2.316-1.176 1.265 0 1.923.637 1.923 2.287v6.766h-2.07v-6.537c0-.589-.198-.98-.756-.98-.428 0-.904.408-1.348.8v6.717h-2.07zm7.327-6.83v-1.667h.821v-2.419h2.07v2.419h1.331v1.667h-1.33v4.543c0 .441.378.653.935.653.149 0 .28 0 .412-.016v1.732a7.17 7.17 0 0 1-1.183.082c-1.348 0-2.235-.49-2.235-1.765v-5.23h-.821zm4.682-2.06h1.938l1.2 5.557h.033l1.2-5.556h1.774l1.265 5.556h.033l1.133-5.556h1.939l-2.103 8.89H39.76l-1.265-5.556h-.033l-1.1 5.556h-1.939z"/><mask id="b" fill="#fff"><use xlink:href="#a"/></mask><path fill="#0A436A" d="M45.278 56.79h2.069v-8.889h-2.07v8.89zm0-10.425h2.069V44.5h-2.07v1.864zm4.304 10.425V44.993h2.07v3.922c.69-.654 1.397-1.176 2.25-1.176 1.266 0 1.924.637 1.924 2.287v6.766h-2.071v-6.537c0-.589-.198-.98-.755-.98-.428 0-.905.408-1.348.8v6.717h-2.07zM17.188 63.4c-.378-1.112-.871-1.586-1.66-1.586-.805 0-1.249.49-1.249 1.29 0 1.782 5.06 1.913 5.06 5.606 0 2.027-1.396 3.367-3.777 3.367-1.842 0-3.27-.997-3.878-3.318l2.234-.474c.263 1.422 1.085 1.929 1.758 1.929.789 0 1.397-.523 1.397-1.406 0-2.222-5.061-2.255-5.061-5.556 0-2.026 1.216-3.3 3.566-3.3 2.02 0 3.253 1.192 3.648 2.86l-2.038.587zm8.098 2.696v-.393c0-.686-.493-1.046-1.216-1.046s-1.216.36-1.216 1.046v3.53c0 .687.493 1.046 1.216 1.046s1.216-.359 1.216-1.045v-.557h2.07v.034c0 2.353-1.216 3.366-3.286 3.366-2.07 0-3.286-1.013-3.286-3.366v-2.485c0-2.353 1.217-3.366 3.286-3.366 2.02 0 3.237.98 3.27 3.236h-2.054zm3.876 5.817V60.114h2.07v3.923c.69-.654 1.398-1.177 2.251-1.177 1.266 0 1.923.637 1.923 2.288v6.765h-2.07v-6.537c0-.588-.198-.98-.756-.98-.427 0-.904.409-1.348.8v6.717h-2.07zm8.214-8.89h2.005v1.014c.673-.605 1.347-1.177 2.217-1.177.773 0 1.332.523 1.578 1.34.64-.703 1.298-1.34 2.202-1.34 1.248 0 1.889.751 1.889 2.353v6.7h-2.07v-6.765c0-.588-.213-.752-.542-.752-.395 0-1.035.458-1.299.8v6.717h-2.07v-6.765c0-.588-.23-.752-.558-.752-.444 0-1.036.458-1.282.8v6.717h-2.07v-8.89zm16.197 3.269v-.49c0-.785-.378-1.275-1.215-1.275-.839 0-1.216.49-1.216 1.275v.49h2.431zm-2.431 1.666v1.177c0 .883.526 1.275 1.216 1.275.87 0 1.215-.556 1.215-1.242h2.07c-.098 1.83-1.198 2.91-3.285 2.91-1.972 0-3.286-1.21-3.286-3.155v-2.91c0-1.944 1.314-3.153 3.286-3.153 1.922 0 3.286 1.209 3.286 3.024v2.074h-4.502zm6.571 3.956h2.07v-11.8h-2.07zm4.156-8.891h5.948v1.765l-3.796 5.328h3.796v1.797H61.54V70.15l3.73-5.328h-3.4zm11.779 3.269v-.49c0-.785-.378-1.275-1.216-1.275s-1.216.49-1.216 1.275v.49h2.432zm-2.432 1.666v1.177c0 .883.526 1.275 1.216 1.275.87 0 1.216-.556 1.216-1.242h2.07c-.099 1.83-1.199 2.91-3.286 2.91-1.971 0-3.286-1.21-3.286-3.155v-2.91c0-1.944 1.315-3.153 3.286-3.153 1.922 0 3.286 1.209 3.286 3.024v2.074h-4.502zm6.308 3.955v-8.89h2.02V64.2h.034c.477-.882 1.101-1.34 2.136-1.34v2.222c-.345-.098-.74-.228-1.1-.228-.675 0-1.02.506-1.02.98v6.08h-2.07z" mask="url(#b)"/><path fill="#FF9F00" d="M14.624 77.721c0 .686.28 1.21.675 1.863.624-.555 1.413-1.094 1.413-2.042 0-.507-.362-1.095-1.052-1.095-.657 0-1.036.555-1.036 1.274zm1.053 7.616c.607 0 1.198-.278 1.527-.654a17.88 17.88 0 0 1-2.366-2.517c-.509.393-.854.785-.854 1.471 0 1.144.821 1.7 1.693 1.7zm5.635-3.726c-.378.98-.805 1.977-1.413 2.941.476.327 1.035.588 1.643.654V87.2c-1.134 0-1.874-.262-2.991-1.21a4.22 4.22 0 0 1-2.974 1.21c-2.283 0-3.86-1.112-3.86-3.269 0-1.634.82-2.5 2.004-3.268-.624-.932-.97-1.667-.97-2.648 0-2.026 1.43-2.94 3.04-2.94s2.793 1.176 2.793 2.662c0 1.52-1.183 2.403-2.284 3.27a18.52 18.52 0 0 0 2.12 2.401c.427-.768.838-1.487 1.068-2.304l1.824.507z" mask="url(#b)"/><path fill="#0A436A" d="M25.071 87.036v-11.8h2.268v9.807h3.647v1.993zm11.352-4.346c-1.232.424-2.481 1.11-2.481 2.042 0 .588.362.931.92.931.625 0 1.068-.327 1.56-.817V82.69zm-4.288-1.945c.148-1.978 1.66-2.762 3.319-2.762 2.202 0 3.04 1.11 3.04 2.697v5.638c0 .244.049.49.115.718h-2.07c-.05-.229-.082-.506-.149-.866-.607.605-1.43 1.03-2.464 1.03-1.25 0-2.054-.687-2.054-2.125 0-2.059 1.972-2.941 4.55-3.71v-.653c0-.768-.476-1.062-1.067-1.062-.624 0-1.15.457-1.15 1.095h-2.07zm8.411 6.291v-8.89h2.005v1.013c.756-.654 1.462-1.176 2.316-1.176 1.265 0 1.923.637 1.923 2.287v6.766h-2.07v-6.537c0-.588-.198-.98-.756-.98-.428 0-.905.409-1.348.8v6.717h-2.07zm10.942-7.386c-.79 0-1.085.539-1.085 1.928 0 1.112.362 1.666.985 1.666.888 0 1.184-.326 1.184-1.879 0-1.143-.361-1.715-1.084-1.715zm-.953 7.778c-.215.212-.428.393-.428.72 0 .457.674.653 1.89.653.986 0 1.56-.245 1.56-.703 0-.294-.13-.425-.755-.474l-2.267-.196zm5.092-7.647c-.164-.034-.476-.131-.64-.131-.214 0-.427.114-.707.196.132.588.263 1.029.263 1.568 0 2.223-.952 3.497-2.99 3.497a2.62 2.62 0 0 1-.854-.114c-.115.163-.362.31-.362.523 0 1.112 5.192-.605 5.192 2.615 0 1.52-1.577 2.24-3.976 2.24-2.202 0-3.418-.622-3.418-1.62 0-.669.756-1.078 1.25-1.388-.494-.294-.856-.686-.856-1.258 0-.703.74-1.177 1.25-1.488-1.002-.653-1.348-1.601-1.348-3.088 0-1.912.74-3.35 3.057-3.35.853 0 1.807.392 2.332 1.03.526-.655 1.036-1.03 1.807-1.03v1.798zm5.683 1.634v-.49c0-.785-.377-1.275-1.215-1.275-.838 0-1.216.49-1.216 1.274v.49h2.432zm-2.43 1.666v1.177c0 .882.525 1.275 1.215 1.275.871 0 1.216-.556 1.216-1.242h2.07c-.098 1.83-1.199 2.909-3.286 2.909-1.971 0-3.286-1.21-3.286-3.155v-2.909c0-1.944 1.315-3.153 3.286-3.153 1.922 0 3.286 1.21 3.286 3.023v2.075H58.88zM2.885 94.318V2.87h91.943L97.714 0H0v97.187z" mask="url(#b)"/><path fill="#0A436A" d="M97.678 5.753v90.809h-91.3l-2.886 2.87h97.07V2.882z" mask="url(#b)"/></g></svg>';
        break;
        case 'white-logo':
            $html = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 100 100"><defs><path id="a" d="M0 99.566h100.563V0H0z"/></defs><g fill="none" fill-rule="evenodd"><path fill="#FFF" d="M17.188 18.056c-.378-1.114-.871-1.588-1.66-1.588-.805 0-1.249.49-1.249 1.293 0 1.784 5.06 1.914 5.06 5.613 0 2.029-1.396 3.37-3.777 3.37-1.842 0-3.27-.998-3.878-3.322l2.234-.474c.263 1.424 1.085 1.931 1.758 1.931.789 0 1.397-.524 1.397-1.408 0-2.224-5.061-2.258-5.061-5.563 0-2.029 1.216-3.306 3.566-3.306 2.02 0 3.253 1.196 3.648 2.864l-2.038.59zm3.761 8.525V14.766h2.07v3.927c.69-.655 1.397-1.178 2.25-1.178 1.266 0 1.923.639 1.923 2.292v6.774h-2.07v-6.545c0-.59-.198-.983-.756-.983-.427 0-.904.41-1.348.803v6.725h-2.07zm12.304-4.353c-1.232.426-2.48 1.113-2.48 2.046 0 .588.361.932.92.932.624 0 1.068-.327 1.56-.818v-2.16zm-4.288-1.947c.148-1.98 1.66-2.766 3.32-2.766 2.2 0 3.038 1.113 3.038 2.7v5.646c0 .245.05.491.116.72h-2.07c-.05-.229-.082-.507-.149-.867-.607.605-1.429 1.03-2.464 1.03-1.249 0-2.054-.686-2.054-2.127 0-2.062 1.972-2.945 4.551-3.714v-.655c0-.769-.476-1.064-1.068-1.064-.624 0-1.15.459-1.15 1.097h-2.07zm7.639-2.602h1.938l1.2 5.564h.033l1.2-5.564h1.774l1.265 5.564h.033l1.134-5.564h1.938l-2.102 8.902h-1.94l-1.265-5.564h-.033l-1.1 5.564H38.74zM15.758 34.671l1.923-4.762h2.415l-3.237 7.037v4.778h-2.267v-4.778l-3.237-7.037h2.415zm6.522 4.369c0 .688.494 1.048 1.217 1.048.723 0 1.215-.36 1.215-1.047v-3.535c0-.688-.492-1.048-1.215-1.048-.723 0-1.216.36-1.216 1.048v3.535zm-2.07-3.01c0-2.357 1.217-3.372 3.287-3.372s3.286 1.015 3.286 3.371v2.488c0 2.356-1.216 3.37-3.286 3.37-2.07 0-3.286-1.014-3.286-3.37v-2.488zm12.552-1.195c-.41-.442-.789-.638-1.249-.638-.558 0-1.018.36-1.018 2.127v1.899c0 1.766.46 2.126 1.018 2.126.46 0 .839-.196 1.25-.638v-4.876zm.164 6.89v-1.081h-.032c-.362.557-1.282 1.244-2.202 1.244-1.61 0-2.268-1.244-2.268-3.535v-2.16c0-2.29.658-3.535 2.268-3.535.558 0 1.084.263 2.07.982v-3.73h2.07v11.814h-1.906zm8.214-5.63v-.49c0-.787-.378-1.277-1.216-1.277s-1.216.49-1.216 1.276v.49h2.432zm-2.432 1.669v1.178c0 .884.526 1.276 1.216 1.276.871 0 1.216-.556 1.216-1.243h2.07c-.098 1.833-1.199 2.913-3.286 2.913-1.971 0-3.286-1.211-3.286-3.158v-2.913c0-1.948 1.315-3.159 3.286-3.159 1.922 0 3.286 1.211 3.286 3.028v2.078h-4.502zm6.309 3.96v-8.902h2.02V34h.034c.475-.884 1.1-1.342 2.135-1.342v2.226c-.345-.098-.739-.23-1.1-.23-.675 0-1.02.508-1.02.983v6.087h-2.07zm-30.409 10.66h2.25l-1.1-4.778h-.032l-1.118 4.778zm-3.236 4.483l2.94-11.815h2.908l2.86 11.815h-2.17l-.574-2.487h-3.138l-.641 2.487h-2.185zm9.905 0v-8.902h2.005v1.015c.756-.655 1.462-1.178 2.316-1.178 1.265 0 1.923.638 1.923 2.29v6.775h-2.07v-6.545c0-.59-.198-.982-.756-.982-.428 0-.904.409-1.348.802v6.725h-2.07zm7.327-6.84v-1.669h.821v-2.422h2.07v2.422h1.331v1.67h-1.33v4.548c0 .442.378.655.935.655.149 0 .28 0 .412-.016v1.734a7.16 7.16 0 0 1-1.183.082c-1.348 0-2.235-.49-2.235-1.767v-5.237h-.821zm4.682-2.062h1.938l1.2 5.564h.033l1.2-5.564h1.774l1.265 5.564h.033l1.133-5.564h1.939l-2.103 8.902H39.76l-1.265-5.563h-.033l-1.1 5.563h-1.939z"/><mask id="b" fill="#fff"><use xlink:href="#a"/></mask><path fill="#FFF" d="M45.278 56.867h2.069v-8.901h-2.07v8.901zm0-10.44h2.069v-1.865h-2.07v1.865zm4.304 10.44V45.052h2.07v3.928c.69-.655 1.397-1.178 2.25-1.178 1.266 0 1.924.638 1.924 2.29v6.775h-2.071v-6.545c0-.59-.198-.982-.755-.982-.428 0-.905.409-1.348.802v6.725h-2.07zm-32.394 6.618c-.378-1.113-.871-1.588-1.66-1.588-.805 0-1.249.491-1.249 1.293 0 1.784 5.06 1.915 5.06 5.613 0 2.029-1.396 3.372-3.777 3.372-1.842 0-3.27-1-3.878-3.323l2.234-.474c.263 1.423 1.085 1.93 1.758 1.93.789 0 1.397-.523 1.397-1.407 0-2.225-5.061-2.258-5.061-5.564 0-2.029 1.216-3.305 3.566-3.305 2.02 0 3.253 1.195 3.648 2.864l-2.038.589zm8.098 2.7v-.393c0-.687-.493-1.047-1.216-1.047s-1.216.36-1.216 1.047v3.535c0 .688.493 1.047 1.216 1.047s1.216-.36 1.216-1.047v-.557h2.07v.033c0 2.357-1.216 3.371-3.286 3.371-2.07 0-3.286-1.014-3.286-3.37v-2.488c0-2.356 1.217-3.371 3.286-3.371 2.02 0 3.237.982 3.27 3.24h-2.054zm3.876 5.825V60.196h2.07v3.927c.69-.655 1.398-1.178 2.251-1.178 1.266 0 1.923.638 1.923 2.29v6.775h-2.07v-6.545c0-.59-.198-.982-.756-.982-.427 0-.904.41-1.348.802v6.725h-2.07zm8.214-8.901h2.005v1.014c.673-.606 1.347-1.178 2.217-1.178.773 0 1.332.523 1.578 1.342.64-.704 1.298-1.342 2.202-1.342 1.248 0 1.889.752 1.889 2.356v6.71h-2.07v-6.775c0-.589-.213-.753-.542-.753-.395 0-1.035.458-1.299.802v6.725h-2.07v-6.774c0-.589-.23-.753-.558-.753-.444 0-1.036.458-1.282.802v6.725h-2.07v-8.9zm16.197 3.272v-.49c0-.786-.378-1.277-1.215-1.277-.839 0-1.216.491-1.216 1.276v.491h2.431zm-2.431 1.67v1.178c0 .883.526 1.276 1.216 1.276.87 0 1.215-.557 1.215-1.244h2.07c-.098 1.833-1.198 2.913-3.285 2.913-1.972 0-3.286-1.21-3.286-3.158v-2.913c0-1.948 1.314-3.158 3.286-3.158 1.922 0 3.286 1.21 3.286 3.028v2.077h-4.502zm6.571 3.959h2.07V60.197h-2.07zm4.156-8.901h5.948v1.766L64.02 70.21h3.796v1.8H61.54v-1.767l3.73-5.334h-3.4zm11.779 3.272v-.49c0-.786-.378-1.277-1.216-1.277s-1.216.491-1.216 1.276v.491h2.432zm-2.432 1.67v1.178c0 .883.526 1.276 1.216 1.276.87 0 1.216-.557 1.216-1.244h2.07c-.099 1.833-1.199 2.913-3.286 2.913-1.971 0-3.286-1.21-3.286-3.158v-2.913c0-1.948 1.315-3.158 3.286-3.158 1.922 0 3.286 1.21 3.286 3.028v2.077h-4.502zm6.308 3.959v-8.9h2.02v1.178h.034c.477-.884 1.101-1.342 2.136-1.342v2.225c-.345-.098-.74-.229-1.1-.229-.675 0-1.02.507-1.02.982v6.087h-2.07z" mask="url(#b)"/><path fill="#FD9E28" d="M14.624 77.826c0 .687.28 1.211.675 1.865.624-.556 1.413-1.095 1.413-2.045 0-.507-.362-1.096-1.052-1.096-.657 0-1.036.556-1.036 1.276zm1.053 7.626c.607 0 1.198-.278 1.527-.655a17.894 17.894 0 0 1-2.366-2.52c-.509.393-.854.786-.854 1.473 0 1.145.821 1.702 1.693 1.702zm5.635-3.731c-.378.982-.805 1.98-1.413 2.946.476.327 1.035.588 1.643.654v1.996c-1.134 0-1.874-.262-2.991-1.21a4.216 4.216 0 0 1-2.974 1.21c-2.283 0-3.86-1.113-3.86-3.272 0-1.637.82-2.504 2.004-3.273-.624-.933-.97-1.67-.97-2.652 0-2.029 1.43-2.945 3.04-2.945s2.793 1.179 2.793 2.667c0 1.523-1.183 2.406-2.284 3.274.64.867 1.348 1.668 2.12 2.405.427-.77.838-1.49 1.068-2.307l1.824.507z" mask="url(#b)"/><path fill="#FFF" d="M25.071 87.153V75.34h2.268v9.818h3.647v1.996zm11.352-4.352c-1.232.425-2.481 1.112-2.481 2.046 0 .588.362.932.92.932.625 0 1.068-.328 1.56-.818V82.8zm-4.288-1.947c.148-1.98 1.66-2.766 3.319-2.766 2.202 0 3.04 1.112 3.04 2.7v5.646c0 .245.049.49.115.72h-2.07c-.05-.23-.082-.507-.149-.867-.607.605-1.43 1.03-2.464 1.03-1.25 0-2.054-.687-2.054-2.127 0-2.062 1.972-2.945 4.55-3.714v-.655c0-.77-.476-1.064-1.067-1.064-.624 0-1.15.458-1.15 1.097h-2.07zm8.411 6.299v-8.901h2.005v1.014c.756-.655 1.462-1.178 2.316-1.178 1.265 0 1.923.638 1.923 2.29v6.775h-2.07v-6.545c0-.59-.198-.982-.756-.982-.428 0-.905.41-1.348.802v6.725h-2.07zm10.942-7.396c-.79 0-1.085.54-1.085 1.931 0 1.113.362 1.669.985 1.669.888 0 1.184-.327 1.184-1.882 0-1.145-.361-1.718-1.084-1.718zm-.953 7.79c-.215.212-.428.392-.428.72 0 .457.674.654 1.89.654.986 0 1.56-.246 1.56-.704 0-.294-.13-.425-.755-.474l-2.267-.197zm5.092-7.659c-.164-.033-.476-.13-.64-.13-.214 0-.427.114-.707.195.132.59.263 1.031.263 1.571 0 2.226-.952 3.502-2.99 3.502-.296 0-.543-.016-.854-.114-.115.163-.362.31-.362.524 0 1.113 5.192-.606 5.192 2.618 0 1.522-1.577 2.242-3.976 2.242-2.202 0-3.418-.623-3.418-1.62 0-.671.756-1.08 1.25-1.391-.494-.295-.856-.687-.856-1.26 0-.704.74-1.178 1.25-1.49-1.002-.654-1.348-1.604-1.348-3.092 0-1.915.74-3.355 3.057-3.355.853 0 1.807.393 2.332 1.031.526-.655 1.036-1.03 1.807-1.03v1.8zm5.683 1.637v-.492c0-.785-.377-1.275-1.215-1.275-.838 0-1.216.49-1.216 1.275v.492h2.432zm-2.43 1.668v1.179c0 .883.525 1.276 1.215 1.276.871 0 1.216-.557 1.216-1.244h2.07c-.098 1.834-1.199 2.913-3.286 2.913-1.971 0-3.286-1.21-3.286-3.158v-2.913c0-1.947 1.315-3.158 3.286-3.158 1.922 0 3.286 1.211 3.286 3.028v2.077H58.88zM2.885 94.445V2.875h91.943L97.714 0H0v97.32z" mask="url(#b)"/><path fill="#FFF" d="M97.678 5.761v90.931h-91.3l-2.886 2.873h97.07V2.887z" mask="url(#b)"/></g></svg>';
        break;
        case 'cart':
            $html = '<svg aria-hidden="true" id="icon_cart" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.3 22.9"><style>.st-cart-0{fill:none;stroke:#010101;stroke-width:2.0757;stroke-linejoin:round;stroke-miterlimit:10}</style><path class="st-cart-0 fillnone" d="M20.2 6.6v12.3c0 1.6-1.3 2.9-2.9 2.9H4c-1.6 0-2.9-1.3-2.9-2.9V6.6h19.1z"/><path class="st-cart-0 fillnone" d="M6.3 10.7V5.4c0-2.4 1.9-4.3 4.3-4.3S15 3 15 5.4v5.2"/></svg>';
        break;

        case 'search':
            $html = '<svg aria-hidden="true" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 21.6"><path class="fillnone" fill="none" stroke="#010101" stroke-width="2.076" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M20.5 20.5l-6.1-6"/><path d="M14.4 3.4c3 3 3 8 0 11s-8 3-11 0-3-8 0-11 8-3 11 0z" fill="none" stroke="#010101" stroke-width="2.076" stroke-miterlimit="10"/></svg>';
        break;

        case 'burger':
            $html = '<svg aria-hidden="true" id="icon_burder" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.2 17.3"><style>.st-burger{fill:none;stroke:#010101;stroke-width:2.0757;stroke-miterlimit:10}</style><path class="st-burger fillnone" d="M0 1.1h19.2M0 8.6h19.2M19.2 16.2H0"/></svg>';
        break;
        case 'chevron-icon':
            $html = '<svg aria-hidden="true" id="chevron-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.54 19.63" width="100%" height="100%"><defs><style>.cls-1{fill:none;stroke:#1882c4;stroke-miterlimit:10;stroke-width:1.45px;}</style></defs><title>chevron-icon</title><polyline class="cls-1" points="0.45 0.57 23.77 18.71 47.1 0.57"/></svg>';
        break;  
        case 'link-out-icon':
            $html = '<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 60 57"><g fill="none" fill-rule="evenodd"><path class="background" fill="#FD9E28" fill-rule="nonzero" d="M0 0h57v57H0z"/><path class="icon" d="M35 29v6a2 2 0 0 1-2 2H22a2 2 0 0 1-2-2V24a2 2 0 0 1 2-2h6m4-3h6v6m-11 5l11-11" stroke="#0A436A" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>';
        break;

        // Start Social Icons 
        case 'social-fb':
            $html = '<img src="' . get_template_directory_uri() . '/assets/img/icon_social_fb.svg" class="icon icon-social" alt="BioInnovation on Facebook, opens in a new window" aria-hidden="true" />';
        break;
        case 'social-twitter':
            $html = '<img src="' . get_template_directory_uri() . '/assets/img/icon_social_twitter.svg" class="icon icon-social" alt="BioInnovation on Twitter, opens in a new window" aria-hidden="true" />';
        break;
        case 'social-email':
            $html = '<svg width="15" height="12" viewbox="0 0 15 12" xmlns="http://www.w3.org/2000/svg"><path d="M14.699.601a.51.51 0 0 0-.011.009L7.5 6.36.312.61A.51.51 0 0 0 .302.6 1.5 1.5 0 0 1 1.5 0h12a1.5 1.5 0 0 1 1.199.601zM15 1.641V10.5c0 .825-.675 1.5-1.5 1.5h-12C.675 12 0 11.325 0 10.5V1.64l7.188 5.75a.5.5 0 0 0 .624 0L15 1.64z" fill="#0F7E97" fill-rule="evenodd"/></svg>';
        break;
        case 'social-linkedin':
            $html = '<?xml version="1.0" encoding="UTF-8"?><svg width="15px" height="14px" viewBox="0 0 15 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M22.2286291,23.4153224 L22.2286291,32.5744129 L19.1802578,32.5744129 L19.1802578,23.4153224 L22.2286291,23.4153224 Z M22.4294025,20.5820463 C22.4294025,21.4614877 21.7674224,22.1651867 20.7045043,22.1651867 L20.6850236,22.1651867 C19.6616148,22.1651867 19,21.4614877 19,20.5820463 C19,19.6840032 19.6817652,19 20.7245938,19 C21.7674224,19 22.4096174,19.6840032 22.4294025,20.5820463 Z M33.2222222,27.3228703 L33.2221005,32.5744129 L30.1738509,32.5744129 L30.1738509,27.6742943 C30.1738509,26.4434897 29.7327338,25.6036222 28.6292105,25.6036222 C27.7870335,25.6036222 27.2854043,26.1698154 27.0650893,26.7166776 C26.9844877,26.9126629 26.9647026,27.1857293 26.9647026,27.4594643 L26.9647026,32.574656 L23.915966,32.574656 C23.915966,32.574656 23.956145,24.2750073 23.915966,23.4155656 L26.9647026,23.4155656 L26.9647026,24.7128739 C27.3692933,24.0892346 28.0939161,23.2002492 29.7124008,23.2002492 C31.7183696,23.2002492 33.2222222,24.5095939 33.2222222,27.3228703 Z" id="path-1"></path></defs><g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="SYA_TEAM-MODAL" transform="translate(-1313.000000, -168.000000)"><g id="modal/icn/Linkedin-icon" transform="translate(1294.000000, 149.000000)"><mask id="mask-2" fill="white"><use xlink:href="#path-1"></use></mask><use fill="#0F7E97" xlink:href="#path-1"></use></g></g></g></svg>';
        break;
        // End Social Icons
    }
    if(!empty($html)) {

        if($echo === true) {
            echo $html;
        } else {
            return $html;
        }
    }
}
?>