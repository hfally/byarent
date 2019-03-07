@component('components.feedback')
    @slot('body_attr', 'text-success')
    @slot('id', $id ?? '')

    @slot('body')
        <h4 class="font-weight-bold">SUCCESS!</h4>
        <span class="feedback-message">{!! $message ?? 'Success' !!}</span>
    @endslot
@endcomponent