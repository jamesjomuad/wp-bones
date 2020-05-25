<div id="app" v-cloak>
    <v-app>
        <v-content>
            <v-container>
                <h1>Vuetify</h1>
                
                <h2>Alerts</h2>

                <v-alert type="success">
                    I'm a success alert.
                </v-alert>

                <v-alert type="info">
                    I'm an info alert.
                </v-alert>

                <v-alert type="warning">
                    I'm a warning alert.
                </v-alert>
                <v-alert border="top" color="red lighten-2" dark>
                    I'm an alert with a top border and red color
                </v-alert>
                <v-alert border="right" color="blue-grey" dark>
                    I'm an alert with a right border and blue-grey color
                </v-alert>
                <v-alert border="bottom" color="pink darken-1" dark>
                    I'm an alert with a bottom border and pink color
                </v-alert>
                <v-alert border="left" color="indigo" dark>
                    I'm an alert with a border left type info
                </v-alert>

                <v-alert border="left" colored-border color="deep-purple accent-4" elevation="2">
                    Aliquam eu nunc. Fusce commodo aliquam arcu. In consectetuer turpis ut velit. Nulla facilisi..

                    Morbi mollis tellus ac sapien. Fusce vel dui. Praesent ut ligula non mi varius sagittis. Vivamus
                    consectetuer hendrerit lacus. Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec, nisi.
                </v-alert>
                <v-alert border="top" colored-border type="info" elevation="2">
                    Vestibulum ullamcorper mauris at ligula. Nam pretium turpis et arcu. Ut varius tincidunt libero.
                    Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Morbi nec metus.
                </v-alert>
                <v-alert border="bottom" colored-border type="warning" elevation="2">
                    Sed in libero ut nibh placerat accumsan. Phasellus leo dolor, tempus non, auctor et, hendrerit quis,
                    nisi. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Sed consequat, leo eget
                    bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Donec elit libero,
                    sodales nec, volutpat a, suscipit non, turpis.
                </v-alert>
                <v-alert border="right" colored-border type="error" elevation="2">
                    Fusce commodo aliquam arcu. Pellentesque posuere. Phasellus tempus. Donec posuere vulputate arcu.
                </v-alert>

                <v-alert dense type="info">
                    I'm a dense alert with a <strong>type</strong> of info
                </v-alert>
                <v-alert dense text type="success">
                    I'm a dense alert with the <strong>text</strong> prop and a <strong>type</strong> of success
                </v-alert>
                <v-alert dense border="left" type="warning">
                    I'm a dense alert with the <strong>border</strong> prop and a <strong>type</strong> of warning
                </v-alert>
                <v-alert dense outlined type="error">
                    I'm a dense alert with the <strong>outlined</strong> prop and a <strong>type</strong> of error
                </v-alert>

                <div>
                    <v-alert v-model="alert" dismissible color="cyan" border="left" elevation="2" colored-border
                        icon="mdi-twitter">
                        You've got <strong>5</strong> new updates on your timeline!.
                    </v-alert>

                    <div class="text-center">
                        <v-btn v-if="!alert" dark @click="alert = true">
                            Reset Alert
                        </v-btn>
                    </div>
                </div>
            </v-container>
        </v-content>
    </v-app>
</div>