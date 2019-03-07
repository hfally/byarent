@component('components.feedback')
    @slot('body_attr', 'text-danger')
    @slot('id', $id)

    @slot('body')
        <h4 class="font-weight-bold">
            <i class="fa fa-exclamation-triangle"></i> ERROR
        </h4>

        <span class="feedback-message">{!! $message ?? 'Error' !!}</span>
    @endslot
@endcomponent