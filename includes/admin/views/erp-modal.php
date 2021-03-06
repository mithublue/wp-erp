<div id="erp-modal">
    <div class="erp-modal">

        <span id="modal-label" class="screen-reader-text"><?php _e( 'Modal window. Press escape to close.', 'wp-erp' ); ?></span>
        <a href="#" class="close">× <span class="screen-reader-text"><?php _e( 'Close modal window', 'wp-erp' ); ?></span></a>

        <form action="" class="erp-modal-form" method="post">
            <header class="modal-header">
                <h2>&nbsp;</h2>
            </header>

            <div class="content-container modal-footer">
                <div class="content"><?php _e( 'Loading', 'wp-erp' ); ?></div>
            </div>

            <footer>
                <ul>
                    <li>
                        <span class="activate">
                            <button type="submit" class="button-primary"></button>
                        </span>
                    </li>
                </ul>
            </footer>
        </form>
    </div>
    <div class="erp-modal-backdrop"></div>
</div>