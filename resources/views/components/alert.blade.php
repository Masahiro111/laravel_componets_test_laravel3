@props([
'message' => 'このメッセージはデフォルトの表示となります',
'type' => 'success',
])

@php
switch($type){
case 'success':
$result = 'bg-green-500';
break;
case 'info':
$result = 'bg-blue-200';
break;
case 'alert':
$result = 'bg-red-500';
break;
case 'warning':
$result = 'bg-yeallow-500';
break;
defalut:
$result = 'bg-green-500';
break;
}
@endphp

<div
     {{ $attributes->merge([
    'class' => 'flex justify-between p-4 items-center ' . $result . ' text-white',
    'style'=> 'font-size:30px;'
    ]) }}>
    <div>{{ $message }}</div>
    <button>x</button>
</div>