<script type="text/javascript">



	$(document).ready(function() {
        <?php if(isset(Yii::app()->session['id_user'])): ?>

        LoadInfo(0);
        <?php else: ?>
            LoadInfo(0);// LoadInfo(1);
        <?php endif; ?>

        });
</script>