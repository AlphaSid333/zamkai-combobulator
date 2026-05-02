Plan I have in mind.

1. In the input folder, user has to input a recipe.json with updated colors, fonts, slug and such
2. Combobulator can live in the scripts folder, accessible via CLI.
3. In a patterns folder in the input folder, user will upload all the patterns.
4. Patterns folder will have subfolders each for Hero, CTA, Features, etc etc, these will ensure script knows what to rename and where what is.
5. The base theme would need to have {theme.name} sort of dynamic data that can be changed with the theme name, this needs to be present in theme.json, style css and other such areas. 
6. The combobulator would also have to identify strings in the patterns and make them translatable using the updated theme slug from theme.json in the input folder.
7. The combobulator will then output into the Output folder where everything is copied, everything updated and the other package.json etc etc that is there in the base theme.