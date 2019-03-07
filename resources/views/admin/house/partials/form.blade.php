<div class="form-section">
    <div class="form-group">
        <label for="category" class="{{ $errors->has('category') ? 'text-danger' : '' }}">Category</label>

        <select name="category" id="category"
                class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" required>

            <option value>--Select a category--</option>

            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category', $house->category->id ?? null) ==
                 $category->id ? 'selected' : '' }}>
                    {{ ucwords($category->name) }}
                </option>
            @endforeach
        </select>

        @if($errors->has('category'))
            <small class="form-text text-danger">
                {{ $errors->first('category') }}
            </small>
        @endif
    </div>

    <div class="form-group">
        <label for="description" class="{{ $errors->has('description') ? 'text-danger' : '' }}">Description</label>

        <textarea name="description" id="description"
                  class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" rows="10"
                  placeholder="Enter detailed description"
                  required>{{ old('description', $house->description ?? null) }}</textarea>

        @if($errors->has('description'))
            <small class="form-text text-danger">
                {{ $errors->first('description') }}
            </small>
        @endif
    </div>

    <div class="form-group">
        <label for="amount" class="{{ $errors->has('amount') ? 'text-danger' : '' }}">Amount</label>

        <div class="input-group">
              <span class="input-group-prepend input-group-text {{ $errors->has('amount') ? 'bg-danger' : '' }}">
                &#8358;
              </span>
            <input name="amount" type="text" data-type="currency" value="{{ old('amount', $house->amount ?? null) }}"
                   class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}"
                   placeholder="Enter amount of house"
                   required/>
        </div>

        @if($errors->has('amount'))
            <small class="form-text text-danger">
                {{ $errors->first('amount') }}
            </small>
        @endif
    </div>
</div>

<hr class="my-5"/>

<div class="form-section">
    <div class="form-group">
        <label {{ $errors->has('no_of_rooms') ? 'text-danger' : '' }}>Number of Rooms</label>

        <input name="no_of_room" type="number"
               class="form-control {{ $errors->has('no_of_rooms') ? 'is-invalid' : '' }}"
               value="{{ old('no_of_room', $house->no_of_room ?? null) }}" placeholder="Enter number of rooms"
               required/>

        @if($errors->has('no_of_room'))
            <small class="form-text text-danger">
                {{ $errors->first('no_of_room') }}
            </small>
        @endif
    </div>

    <div class="form-group">
        <label class="{{ $errors->has('no_of_bath') ? 'text-danger' : '' }}">Number of Baths</label>

        <input type="number" class="form-control {{ $errors->has('no_of_bath') ? 'is-invalid' : '' }}" name="no_of_bath"
               value="{{ old('no_of_bath', $house->no_of_bath ?? null) }}"
               placeholder="Enter number of bathrooms/toilets" required/>

        @if($errors->has('no_of_bath'))
            <small class='form-text text-danger'>
                {{ $errors->first('no_of_bath') }}
            </small>
        @endif
    </div>

    <div class="form-row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="{{ $errors->has('breadth') ? 'text-danger' : '' }}">Size</label>

                <div class="input-group">
                    <input type="number" class="form-control {{ $errors->has('breadth') ? '' : '' }}"
                           placeholder="Breadth" name="breadth"
                           value="{{ old('breadth', $house->breadth ?? null) }}" required/>
                    <span class="input-group-append input-group-text">
                        FT.
                    </span>
                </div>

                @if($errors->has('breadth'))
                    <small class='form-text text-danger'>
                        {{ $errors->first('breadth') }}
                    </small>
                @endif
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="{{ $errors->has('length') ? 'text-danger' : '' }}">By</label>

                <div class="input-group">
                    <input type="number" class="form-control {{ $errors->has('length') ? 'is-invalid' : '' }}"
                           placeholder="Length"
                           value="{{ old('length', $house->length ?? null) }}" name="length" required/>
                    <span class="input-group-append input-group-text">
                        FT.
                    </span>
                </div>

                @if($errors->has('length'))
                    <small class='form-text text-danger'>
                        {{ $errors->first('length') }}
                    </small>
                @endif
            </div>
        </div>
    </div>
</div>

<hr class="my-5"/>

<div class="form-section">
    <div class="form-group">
        <label for="country" class="{{ $errors->has('country') ? 'text-danger' : '' }}">Country</label>

        <select id="country" name="country" class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}"
                required>
            <option value="nigeria">
                Nigeria
            </option>
        </select>

        @if($errors->has('country'))
            <small class="form-text text-danger">
                {{ $errors->first('country') }}
            </small>
        @endif
    </div>

    <div class="form-group">
        <label for="state" class="{{ $errors->has('state') ? 'text-danger' : '' }}">State</label>

        <select id="state" name="state" class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" required>
            <option value>
                --Select state--
            </option>

            @foreach($states as $state)
                <option value="{{ $state->name }}" {{ $state->name == old('state', $house->state ?? null) ? 'selected' : '' }}>
                    {{ $state->name }}
                </option>
            @endforeach
        </select>

        @if($errors->has('state'))
            <small class="form-text text-danger">
                {{ $errors->first('state') }}
            </small>
        @endif
    </div>

    <div class="form-group">
        <label class="{{ $errors->has('city') ? 'text-danger' : '' }}">City</label>

        <input type="text" name="city" value="{{ old('city', $house->city ?? null) }}"
               class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}"
               placeholder="Enter city here" required/>

        @if($errors->has('city'))
            <small class="form-text text-danger">
                {{ $errors->first('city') }}
            </small>
        @endif
    </div>

    <div class="form-group">
        <label class="{{ $errors->has('lga') ? 'text-danger' : '' }}">Local Government Area</label>

        <input type="text" name="lga" value="{{ old('lga', $house->lga ?? null) }}"
               class="form-control {{ $errors->has('lga') ? 'is-invalid' : '' }}"
               placeholder="Enter Local Government Area of house" required/>

        @if($errors->has('lga'))
            <small class="form-text text-danger">
                {{ $errors->first('lga') }}
            </small>
        @endif
    </div>

    <div class="form-group">
        <label class="{{ $errors->has('street') ? 'text-danger' : '' }}">Street</label>

        <input type="text" name="street" value="{{ old('street', $house->street ?? null) }}"
               class="form-control {{ $errors->has('street') ? 'is-invalid' : '' }}"
               placeholder="Enter street name" required/>

        @if($errors->has('street'))
            <small class="form-text text-danger">
                {{ $errors->first('street') }}
            </small>
        @endif
    </div>
</div>

<hr class="my-5"/>

<div>
    <div class="form-group">
        <label>Slide Images</label>
        <div class="alert alert-info">
            The first picture will be used as thumbnail.
            <br/>
            Accepted Format: .jpg
            <br/>
            Max size: 1.5mb
            <br/>
            Minimum of 2 photos
        </div>

        @if( $errors->has('slide_images') || $errors->has('slide_images.*') )
            <div class="alert alert-danger">
                <strong><i class="fa fa-exclamation-triangle"></i> Error</strong>
                {{ $errors->first('slide_images') ?: $errors->first('slide_images.*') }}
            </div>
        @endif

        @if(isset($house))
            <div class="form-inline my-4 uploader">
                @php($x = 1)
                @foreach($house->pictures as $picture)
                    <div class="checkbox {{ $x > 1 ? 'ml-3' : '' }}">
                        <label for="delete-{{ $picture->id }}">
                            <img src="{{ $picture->path }}" class="img-thumbnail"
                                 style="height: 80px; cursor: pointer;">
                        </label>
                        <input type="checkbox" name="delete_slides[]" value="{{ $picture->id }}"
                               id="delete-{{ $picture->id }}" class="delete-slide"> Delete
                    </div>
                    @php($x++)
                @endforeach
            </div>
        @endif


        <div class="uploader">
            <div class="uploader-inside first">
                <img src="" height="210" id="preview-0" class="collapse">
                <input type="file" name="slide_images[]" data-content="0" class="photo" id="photo-0">
            </div>

            @for($x = 1; $x < 10; $x++)
                <div class="uploader-inside">
                    <img src="" height="210" id="preview-{{ $x }}" class="collapse">
                    <input type="file" name="slide_images[]" data-content="{{ $x }}" class="photo"
                           id="photo-{{ $x }}">
                </div>
            @endfor

        </div>
    </div>
</div>