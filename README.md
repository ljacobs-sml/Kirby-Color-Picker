# Color Picker Field for Kirby CMS

A simple color picker field for [Kirby CMS](http://getkirby.com/) which makes use of the [spectrum.js](https://github.com/bgrins/spectrum) plugin.


![color-picker](https://cloud.githubusercontent.com/assets/4502605/6307762/a279185c-b90c-11e4-81f8-0fe61f0779a2.png)

To install, drop the `color` folder into `site/fields/`

Then in your blueprint you can use the new `color` field.

```
fields:
  bgcolor:
    label: Background Color
    type:  color
```

## Credits
Thanks to [@claviska](https://github.com/claviska) for his great MiniColors plugin.

Also thanks to [@ptouch718](https://github.com/ptouch718) for his masterful JS debugging.

And of course the original author I forked, [@ian-cox](https://github.com/ian-cox), for having superior field template code than my original field example did.
