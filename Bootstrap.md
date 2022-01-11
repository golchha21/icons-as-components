# Bootstrap Icons Usage

Insert an icon anywhere into a blade template by calling the appropriate component.
Component name format is 'x-bi-[icon name]'. For example:

```blade
<x-bi-bell-fill/>
```

Specify custom classes on top of the default 'bi' and 'bi-[icon name]' classes:

```blade
<x-bi-bell-fill class="you-custom-class"/>
```

Specify the height and width (the default for both is 16):

```blade
<x-bi-bell-fill width="24" height="24"/>
```

Set the viewBox property (the default is '0 0 16 16'):

```blade
<x-bi-bell-fill viewBox="0 0 20 20"/>
```

Set the fill property (the default is 'currentColor'):

```blade
<x-bi-bell-fill fill="red"/>
```

Refer to [Bootstrap Icons](https://icons.getbootstrap.com/) for the list of all available icons and their names.
