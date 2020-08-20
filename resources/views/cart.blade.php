@if($newCart != null)
    <div class="select-items">
        <table>
            <tbody>
            @foreach($newCart->products as $item)
                <tr>
                    <td class="si-pic"><img src="img/products/{{$item['productInfo']->image}}" width="100" alt=""></td>
                    <td class="si-text">
                        <div class="product-selected">
                            <p>{{number_format($item['productInfo']->price)}}đ x {{$item['quantity']}}</p>
                            <h6>{{$item['productInfo']->name}}</h6>
                        </div>
                    </td>
                    <td>
                        <p onclick="deleteItemCart({{$item['productInfo']->id}})" data-id='{{$item['productInfo']->id}}'
                           class="ti-close"></p>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="select-total">
        <span>total:</span>
        <h5>{{number_format($newCart->totalPrice)}}đ</h5>
    </div>
    </div>
@endif
{{--<div class="select-button">
    <a href="#" class="primary-btn view-card">VIEW CARD</a>
    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
</div>--}}
