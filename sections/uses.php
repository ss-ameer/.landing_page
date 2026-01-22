<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Perfect For</h2>
        <div class="row">
            <?php foreach ($data['uses'] as $use): ?>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5><?= htmlspecialchars($use['title']) ?></h5>
                            <p><?= htmlspecialchars($use['text']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>