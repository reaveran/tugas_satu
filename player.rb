 class Player

    def initialize(nama)
        @name = nama
        @blood = 100
        @manna = 40
    end


    def get_name
        @name
    end

    def get_blood
        @blood
    end

    def get_manna
        @manna
    end

    def set_name name
        @name = name
    end

    def set_blood blood
        @blood = blood
    end

    def set_manna manna
        @manna = manna
    end

end