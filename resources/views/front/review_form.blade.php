<div>
    <div class="reveal" id="product-review-modal" data-reveal>
        <div>
            <form action="{{route('review.store')}}" method="post" role="form">
                {{csrf_field()}}
                <legend>Rate our product</legend>
                <div class="form-group">
                    <label for="">Rate It</label>
                    <input type="text" class="form-control" name="headline" palceholder="Input...">
                </div>

                <div class="form-group">
                    <label for="">Head Line</label>
                    <input type="text" class="form-control" name="headline" palceholder="Input...">
                </div>
                <div class="form-group">
                    <label for="">Tell Us More</label>
                    <input type="text" class="form-control" name="description" palceholder="Input...">
                </div>

            </form>
        </div>
    </div>
</div>