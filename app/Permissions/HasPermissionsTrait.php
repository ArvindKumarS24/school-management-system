

    public function permissions() {
        return $this->belongsToMany(Permission::class,'users_permissions')->whereNull('users_permissions.deleted_at');

    
