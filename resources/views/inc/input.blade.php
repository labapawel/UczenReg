
<!-- Pozostałe pola formularza -->
                            <div class="form-group row mt-3">
                                <label for="{{$id}}" class="col-md-4 col-form-label text-md-right @if($req) bold @endif">@if($req) * @endif{{$title}}</label>
                                <div class="col-md-6">
                                    <input id="{{$id}}" type="text" class="form-control" name="{{$id}}" value="{{old($id)}}">
                                </div>
                            </div>
                            @if($errors->has($id))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first($id) }}</strong>
                                </span>
                            @endif                            

